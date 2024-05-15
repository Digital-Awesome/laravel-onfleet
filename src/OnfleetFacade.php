<?php

namespace DigitalAwesome\LaravelOnfleet;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Admins admins()
 * @method static Containers containers()
 * @method static Destinations destinations()
 * @method static Hubs hubs()
 * @method static Organization organization()
 * @method static Recipients recipients()
 * @method static Tasks tTasks()
 * @method static Teams teams()
 * @method static Webhooks webhooks()
 * @method static Workers workers()
 *
 */
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
