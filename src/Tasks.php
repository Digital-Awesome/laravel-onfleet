<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Tasks
{
    abstract public function get(array|string $idOrQuery, ?string $shortId = null): array;
    abstract public function create(array $params): array;
    abstract public function clone(string $id): array;
    abstract public function forceComplete(string $id): array;
    abstract public function batch(array $params): array;
    abstract public function autoAssign(array $params): array;
    abstract public function matchMetadata(array $params): array;
    abstract public function update(string $id, array $params): array;
    abstract public function deleteOne(string $id): array;
}
