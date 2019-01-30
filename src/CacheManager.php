<?php

declare(strict_types=1);

namespace P7v\Exacto;

class CacheManager
{
    /** @var array */
    private $stores = [];

    public function store(string $name)
    {
        return $this->stores[$name] ?? $this->create($name);
    }

    private function create(string $name)
    {
    }
}
