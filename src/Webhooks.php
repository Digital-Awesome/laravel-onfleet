<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Webhooks
{
    abstract public function get(): array;
    abstract public function create(array $params): array;
    abstract public function deleteOne(string $id): array;
}
