
# Laravel Console Extension

## Requirements

- Laravel [5.6](https://laravel.com/docs/5.6) or [5.7](https://laravel.com/docs/5.7).

## Installation

You should install the `xuanquynh/laravel-extensions` dependency via Composer:

```bash
composer require xuanquynh/laravel-extensions
```

Then, you have to add the `XuanQuynh\Laravel\Console\ConsoleServiceProvider` class to the `config/app.php` configuration file.

```php
return [

    'providers' => [

        /*
         * Package Service Providers...
         */
        XuanQuynh\Laravel\Console\ConsoleServiceProvider::class,

    ],

];
```

## Usage

These are available commands now:

```bash
# Create a new class file.
php artisan make:class ClassName
# Create a new interface file.
php artisan make:interface InterfaceName
# Create a new trait file.
php artisan make:trait TraitName
```
