<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Admins
{
    abstract public function get(): array;
    abstract public function create(array $params): array;
    abstract public function matchMetadata(array $params): array;
    abstract public function update(string $id, array $params): array;
    abstract public function deleteOne(string $id): array;
}
