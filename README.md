## wp-boilerplate

GunnJerkens Wordpress boilerplate theme + plugins

To initialize a new project, clone and then execute the init.sh script:

```
./init.sh
```

This will remove the .git folder, initialize it as a new repo, and loop through .gitmodules to initialize the submodules

*Gotcha: the submodules will be checked out at the tip of their master branch instead of the same commit as the boilerplate repo*

To clone and edit the boilerplate repo normally, run `git submodule update --init` to retrieve submodules

## Dependencies
[SASS](http://sass-lang.com/): `gem install sass`  
[Compass](http://compass-style.org/): `gem install compass`  
[Compass Normalize](https://github.com/ksmandersen/compass-normalize): `gem install compass-normalize`  
