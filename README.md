# laravel-globelabs

#### Overview

A Laravel package for sending SMS through [GlobeLabs SMS API](http://www.globelabs.com.ph/#!/developer/api/sms).



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

//or with optional mask name (make sure you APP configured in GlobeLabs dashboard supports dynamic masked name)
Globe::send('phone_number', 'message', 'passphrase', 'app_id', 'app_secret', 'short_code', 'mask_name');
```



#### Credits

- ([@kpdcdg](https://github.com/kpdcdg))
- ([@marklee138](https://github.com/marklee138/))
- ([@breekoy](https://github.com/breekoy))



#### Contribute

Please feel free to fork and send a pull request with your changes!



#### License

Released under the [MIT License](https://github.com/coredevsolutions/laravel-globelabs/blob/master/LICENSE).
