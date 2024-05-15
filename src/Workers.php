<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Workers
{
    abstract public function get(array|string|null $idOrParams = null): array;
    abstract public function getByLocation(array $params): array;
    abstract public function setSchedule(string $id, array $params): array;
    abstract public function getBySchedule(string $id): array;
    abstract public function create(array $params): array;
    abstract public function matchMetadata(array $params): array;
    abstract public function update(string $id, array $params): array;
    abstract public function insertTask(string $id, array $params): array;
    abstract public function deleteOne(string $id): array;
}
