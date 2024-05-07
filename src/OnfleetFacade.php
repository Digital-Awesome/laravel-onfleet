<?php

namespace DigitalAwesome\LaravelOnfleet;

use Illuminate\Support\Facades\Facade;

class OnfleetFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Onfleet';
    }

    public static function verifyKey(): bool
    {
        return static::__callStatic('verifyKey', func_get_args());
    }
}
