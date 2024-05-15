<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Recipients
{
    abstract public function get(string $idOrNameOrPhone, ?string $type = null): array;
    abstract public function create(array $params): array;
    abstract public function matchMetadata(array $params): array;
    abstract public function update(string $id, array $params): array;
}
