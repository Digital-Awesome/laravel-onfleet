<?php

namespace DigitalAwesome\LaravelOnfleet;

use Illuminate\Support\Facades\Facade;

class OnfleetFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Onfleet';
    }
}
