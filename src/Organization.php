<?php

namespace DigitalAwesome\LaravelOnfleet;


abstract class Organization
{
    abstract public function get(?string $id = null): array;
    abstract public function insertTask(string $id, array $params): array;
}
