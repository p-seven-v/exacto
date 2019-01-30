<?php

declare(strict_types=1);

namespace P7v\Exacto;

use P7v\Exacto\Stores\Store;

class Repository
{
    /** @var Store */
    protected $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function get(string $key, $default = null)
    {
        $value = $this->store->get($key);

        if (is_null($value)) {
            return $default;
        }

        return $value;
    }
}
