<?php

namespace DigitalAwesome\LaravelOnfleet;

use Illuminate\Support\ServiceProvider;

class OnfleetServiceProvider extends ServiceProvider
{
    protected bool $defer = false;

    public function boot(): void
    {
        $this->publishes([__DIR__ . '/config/onfleet.php' => config_path('onfleet.php')]);
    }

    public function register(): void
    {
        $this->app->singleton(Onfleet::class, function () {
            return new Onfleet();
        });

        $this->app->alias(Onfleet::class, 'Onfleet');
        // Default Package Configuration
        $this->mergeConfigFrom(__DIR__ . '/config/onfleet.php', 'onfleet');
    }
}
