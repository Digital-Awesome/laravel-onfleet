<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Teams
{
    abstract public function get(?string $id = null): array;
    abstract public function getWorkerEta(string $id, array $params): array;
    abstract public function create(array $params): array;
    abstract public function autoDispatch(string $id, array $params): array;
    abstract public function update(string $id, array $params): array;
    abstract public function insertTask(string $id, array $params): array;
    abstract public function deleteOne(string $id): array;
}
