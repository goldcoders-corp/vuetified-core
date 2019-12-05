# Vuetified Core

<section class="article_badges">
    <a href="https://github.com/codeitlikemiley/vuetified-core/releases"><img src="https://img.shields.io/github/release/codeitlikemiley/vuetified-core.svg?style=flat-square" alt="Latest Version"></a>
    <a href="https://github.com/codeitlikemiley/vuetified-core/blob/master/LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></a>
    <a href="https://travis-ci.org/codeitlikemiley/vuetified-core"><img src="https://img.shields.io/travis/codeitlikemiley/vuetified-core/master.svg?style=flat-square" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/codeitlikemiley/vuetified-core"><img src="https://img.shields.io/scrutinizer/g/codeitlikemiley/vuetified-core.svg?style=flat-square" alt="Quality Score"></a>
    <a href="https://packagist.org/packages/codeitlikemiley/vuetified-core"><img src="https://img.shields.io/packagist/dt/codeitlikemiley/vuetified-core.svg?style=flat-square" alt="Total Downloads"></a>
</section>
-   Quick Install Vuetify and InertiaJS with Some Goodies You Need To Start a Project

![pic-full-191203-1400-24](https://user-images.githubusercontent.com/28816690/70024537-61212180-15d5-11ea-8b31-584c982507ba.png)

## Requirements

-   php 7.3+
-   Laravel 6.6+

## Installation

-   require to your composer

```php
composer require codeitlikemiley/vuetified-core
```

## The Following Stubs Are Added

```php
resources/views/app.blade.php
webpack.mix.js
resouces/js/app.js
resouces/js/services/vuetify.js
resouces/js/Shared/Layout.vue
resources/js/Pages/Welcome.vue
resources/js/components
routes/web.php
.eslintrc.js
```

## Composer Packages Included

```php
inertiajs/inertia-laravel
tightenco/ziggy
reinink/remember-query-strings
```

## Artisan Command Added

-   commands to install/uninstall core
    -   vuetified:reset
    -   vuetified:preset
-   commands to install/uninstall other packages
    -   vuetified:install {vuetified-package-name}
    -   vuetified:uninstall {vuetified-package-name}

## Other Packages optionally you may want to install

-   vuetified-acl
-   vuetified-auth
-   vuetified-version
-   vuetified-laravel-echo
-   vuetified-laravel-websockets
-   vuetified-testkit
-   vuetified-vscode-settings
-   vuetified-welcome-page
