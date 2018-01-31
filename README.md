# Welcome to WebEd CMS
#### A CMS based on Laravel 5.5
![Build status](https://travis-ci.org/sgsoft-studio/webed.svg)
![Total downloads](https://poser.pugx.org/sgsoft-studio/base/d/total.svg)
![Latest Stable Version](https://poser.pugx.org/sgsoft-studio/base/v/stable.svg)

## Demo
- Demo site: [https://cms.sgsoft-studio.com/](https://cms.sgsoft-studio.com/)
- Admin demo site: [https://cms.sgsoft-studio.com/admincp](https://cms.sgsoft-studio.com/admincp) (demo@webed.com/demo1234)

If you cannot login, please visit this link [https://cms.sgsoft-studio.com/reset-password](https://cms.sgsoft-studio.com/reset-password) to reset password.

### Documentation
- [Documentation page](https://webed.sgsoft-studio.com/docs/3.1/overview)
- Link repos documentation: [github.com/sgsoft-studio/docs-site](https://github.com/sgsoft-studio/docs-site)

#### WebEd is a free open source!

# WebEd has been discontinued

I would like to say thanks that you guys use this cms, but I'm so appreciated that I cannot continue develop WebEd.
I do not have enough time and my financial situation is not good. I'm so sorry. ^^
You guys can use another cms, such as Voyager,...

### Some cool features of WebEd CMS:
- Modular packages.
- Manage files with Elfinder.
- ACL.
- Menu management with drag & drop.
- Database caching.
- Themes & plugins management.
- Hook (actions hook, filters hook).
- Manage pages, blocks, blog, contact form, Google Analytics, custom fields...

## System Requirement
On this projects, I use the latest Laravel version (currently 5.5). 
Please go to [laravel documentation page](https://laravel.com/docs/5.5/installation) to check your system requirements.

# WebEd installation guide

## Install directly from composer
```
composer create-project --prefer-dist sgsoft-studio/webed webed
```

## Install to the existing project
Require WebEd to your composer.json by this command
```
composer require sgsoft-studio/base:4.0.*
```
Open file `config/auth.php`, change the web login model to `WebEd\Base\Users\Models\User::class`.

### Change WebEd database prefix
By default, all WebEd tables have `we_` prefix. If you want to change them, open your `public/index.php`, add these line on top of this file:
```
define('WEBED_DB_PREFIX', 'we_');
```

### Then
```
php artisan key:generate
php artisan cms:install
```

Access to dashboard:
```
php artisan serve
http://localhost:8000/admincp
```

You can config admin route by modify the .env:
```
WEBED_ADMIN_ROUTE=admincp
```

All available WebEd env config:
```
#Caching service
CACHE_REPOSITORY_ENABLED=true
CACHE_REPOSITORY_DRIVER=file
CACHE_REPOSITORY_LIFETIME=-1

#Admin route alias
WEBED_ADMIN_ROUTE=admincp
WEBED_API_ROUTE=api
```

If you see this message when enable plugins/themes, it's because of your server does not support composer dump-autoload
helper. Try to run **composer dump-autoload** by yourself.


>The base module of this class is enabled, but class not found: ***xxx***. Please review and add the namespace of this module to composer autoload section, then run **composer dump-autoload**


## Plugins
Download the plugins and places it at **/plugins** folder.

[Plugins list](https://github.com/webed-plugins)
All plugins with released version is `4.0.*` will stable with WebEd 4.0.

## Need more support?
- Email: [duyphan.developer@gmail.com](mailto:duyphan.developer@gmail.com)
