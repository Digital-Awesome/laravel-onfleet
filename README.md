# Laravel-Onfleet
A simple Laravel wrapper for Onfleet PHP Wrapper.

# Installation

## Requirements
 *  php: >=8.2
 *  guzzlehttp/guzzle: ^7.8
 *  laravel/framework: ~10.0
 *  onfleet/php-onfleet: dev-master

## Composer
```
composer require "Digital-Awesome/laravel-onfleet"
```

## Service Provider
The **DigitalAwesome\LaravelOnfleet\LaravelOnfleetServiceProvider** is auto-discovered and registered by default, but if you want to register it yourself:

Add the ServiceProvider in config/app.php

```
'providers' => [
    /*
     * Package Service Providers...
     */
    DigitalAwesome\LaravelOnfleet\LaravelOnfleetServiceProvider::class,
]
```

## Facade
The **Onfleet** facade is also auto-discovered, but if you want to add it manually:

Add the Facade in config/app.php

```
'aliases' => [
    ...
    'Onfleet' => DigitalAwesome\LaravelOnfleet\LaravelOnfleetFacade::class,
]
```
## Config
To publish the config, run the vendor publish command:

```
php artisan vendor:publish --provider="DigitalAwesome\LaravelOnfleet\LaravelOnfleetServiceProvider"
```

Sample of config/onfleet.php
```
<?php
return [
    'api_key' => env('ONFLEET_API_KEY'),
];
```

# Getting Started

I highly advise to use the facade as all examples will use it.
```
use Onfleet;
```