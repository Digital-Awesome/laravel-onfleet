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
        return call_user_func_array([$this->api, $method], $args);
    }
}
