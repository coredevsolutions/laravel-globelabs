# laravel-globelabs-api

#### Installation

```
composer require coredev/laravel-globelabs
```

#### Usage , run ```php artisan vendor:publish```
```
use Globe\Globe;

Globe::send($number, $message, $passphrase, $app_id, $app_secret, $short_code)
```