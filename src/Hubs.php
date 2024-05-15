<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Hubs
{
    abstract public function get(): array;
    abstract public function create(array $params): array;
    abstract public function update(string $id, array $params): array;
}
