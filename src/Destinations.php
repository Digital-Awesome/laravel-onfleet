<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Destinations
{
    abstract public function get(string $id): array;
    abstract public function create(array $params): array;
    abstract public function matchMetadata(array $params): array;
}
