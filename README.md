# Product Layout #

This module would add new tab to admin product detail screen called Product Layout. You can select here which layout will be used for displaying  on product view page on frontend.

### Getting the Code via SSH & Composer ###
update "require" and "repositories" parts in main magento2 composer file

```
"require": {
    "gateway3d/product-layout": "@dev"
}


"repositories": [
    {
        "type": "vcs",
        "url": "git@bitbucket.org:gateway3d/product-layout.git"
    }
]

```

Then run following command

```
$ composer require gateway3d/magento2-personaliseit2
```

you should see something like this

```
Loading composer repositories with package information
Updating dependencies (including require-dev)             
  - Installing gateway3d/product-layout (dev-master e51a8bf)
    Cloning e51a8bf961ae49e5eb92cbc6c1e0e6cf9eed81db
Writing lock file
Generating autoload files
```

# Updating the Database #
Subsequently, the Magento command line tool must now also be used to update the database schema.Then you would be probably asked to recompile. After that set permissions and clean cache.
```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
sudo chmod 777 var -R && sudo chmod 777 pub -R
 n98-magerun2.phar cache:clean && n98-magerun2.phar cache:flush && sudo chmod 777 var -R && sudo chmod 777 pub -R
```


