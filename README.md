# laravel-globelabs

#### Overview

A simple Laravel package for [GlobeLabs SMS API](http://www.globelabs.com.ph/#!/developer/api/sms).



#### Requirements

- Laravel 5.5+
- PHP 7+
- Guzzle 6+



#### Installation

You can install `laravel-globelabs` package via composer.

```
composer require coredev/laravel-globelabs
```



#### Configuration

Register provider and aliases on your `config/app.php` file.

```php
'providers' => [
    CoreDev\LaravelGlobeLabs\GlobeServiceProvider::class,
],

'aliases' => [
    'Globe' => CoreDev\LaravelGlobeLabs\Globe::class,
],
```



#### Usage

You can use it in your controller like this: 

```php
use Globe;

Globe::send('phone_number', 'message', 'passphrase', 'app_id', 'app_secret', 'short_code');
```