<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Workers
{
    abstract public function get(): array;
    abstract public function list(): array;
}
