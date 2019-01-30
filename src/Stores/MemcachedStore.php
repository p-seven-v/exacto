<?php

declare(strict_types=1);

namespace P7v\Exacto\Stores;

use Memcached;
use ReflectionMethod;

class MemcachedStore implements Store
{
    /** @var Memcached */
    private $memcached;

    /** @var bool */
    private $isVersionThree;

    public function __construct(Memcached $memcached)
    {
        $this->memcached = $memcached;
        $this->isVersionThree = (new ReflectionMethod(Memcached::class, 'getMulti'))
            ->getNumberOfParameters() === 2;
    }

    public function get(string $key)
    {
        $value = $this->memcached->get($key);

        if ($this->memcached->getResultCode() === Memcached::RES_NOTFOUND) {
            // cache miss
            return null;
        }

        return $value;
    }
}
