<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Admins
{
    abstract public function get(): array;
    abstract public function list(): array;
}
