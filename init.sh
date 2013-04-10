#!/bin/bash

set -e


read -p "Do you want to remove your .git and reinitialize all submodules? " -n 1
if [[ ! $REPLY =~ ^[Yy]$ ]]
then
    exit 1
fi


rm -rf .git
git init


#Initialize Submodules
git config -f .gitmodules --get-regexp '^submodule\..*\.path$' > tempfile

while read -u 3 path_key path
    do
        url_key=$(echo $path_key | sed 's/\.path/.url/')
        url=$(git config -f .gitmodules --get "$url_key")
        rm -rf $path; git submodule add $url $path; 
        echo "$path has been initialized";
    done 3<tempfile

rm tempfile

wget http://wordpress.org/latest.zip

unzip ./latest.zip

mv wordpress/* .

rm wp-config-sample.php
rm latest.zip
