## wp-boilerplate

GunnJerkens Wordpress boilerplate theme + plugins

To initialize a new project, clone and then execute the init.sh script:

```
./init.sh
```

This will remove the .git folder, initialize it as a new repo, loop through .gitmodules to initialize the submodules, and install the WordPress core.

*Gotcha: the submodules will be checked out at the tip of their master branch instead of the same commit as the boilerplate repo*

After initializing a new project, enter your environment variables in wp-config.php and db_sync.sh.  You can then run db_sync.sh to sync down from the production database:

```
./db_sync.sh
```

To clone and edit the boilerplate repo normally, run `git submodule update --init` to retrieve submodules.

## Included Plugins
[WPThumb](http://hmn.md/blog/2011/10/19/introducing-wp-thumb/): Seamlessly integrates with native WordPress image functions to crop, resize, and cache uploaded media on-demand.  
[Uploads by Proxy](http://wordpress.org/extend/plugins/uploads-by-proxy/): Automatically retrieves uploaded media from a remote server (production or staging) if it doesn't exist locally  
[Advanced Custom Fields](http://www.advancedcustomfields.com/): Great plugin that enables advanced CMS functionality in WordPress  
[Enable Media Replace](http://wordpress.org/extend/plugins/enable-media-replace/): Enables replacement of uploaded media for updates  

## Dependencies
[SASS](http://sass-lang.com/): `gem install sass`  
[Compass](http://compass-style.org/): `gem install compass`  
[Compass Normalize](https://github.com/ksmandersen/compass-normalize): `gem install compass-normalize`  
