# Laravel-Onfleet
A simple Laravel wrapper for <a href="https://github.com/onfleet/php-onfleet">Onfleet PHP Wrapper</a>.

# Installation

## Requirements
 *  php: >=8.2
 *  guzzlehttp/guzzle: ^7.8
 *  laravel/framework: ~10.0|~11.0|~12.0
 *  onfleet/php-onfleet: dev-master

## Composer
```
composer require digital-awesome/laravel-onfleet
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

Basic usage examples
```
use Onfleet;

Onfleet::verifyKey();
$workers = Onfleet::workers()->get();
$tasks = Onfleet::tasks()->get([ "from" => "<from_time>", "to" => "<to_time>" ]);
```

Please check the official <a href="https://github.com/onfleet/php-onfleet">Onfleet PHP Wrapper</a> documentation for more usage examples and complete documentation.