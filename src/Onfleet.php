<?php

namespace DigitalAwesome\LaravelOnfleet;


use Onfleet\errors\ValidationError;
use Onfleet\Onfleet as OnfleetApi;

class Onfleet
{
    protected OnfleetApi $api;

    /**
     * @throws ValidationError
     */
    public function __construct()
    {
        $apiKey = config('onfleet.api_key');
        $this->api = new OnfleetApi($apiKey);
    }

    public function __call($method, $args)
    {
        // If trying to access a property instead of calling a method directly on the API.
        if (property_exists($this->api, $method)) {
            return new class($this->api->$method) {
                private object $target;

                public function __construct(object $target)
                {
                    $this->target = $target;
                }

                public function __call(string $name, array $arguments)
                {
                    return call_user_func_array([$this->target, $name], $arguments);
                }
            };
        }

        // Otherwise, call the method directly on the API
        return call_user_func_array([$this->api, $method], $args);
    }
}
