<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Containers
{
    abstract public function get(string $id, string $type): array;
    abstract public function update(string $id, array $params): array;
}
