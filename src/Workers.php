<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Workers
{
    /**
     * Get information about all workers.
     */
    abstract public function get(): array;
}
