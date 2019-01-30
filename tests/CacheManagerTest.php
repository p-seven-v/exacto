<?php

declare(strict_types=1);

namespace P7v\Exacto\Tests;

use P7v\Exacto\CacheManager;
use PHPUnit\Framework\TestCase;

class CacheManagerTest extends TestCase
{
    /** @test */
    public function it_is_instantiable()
    {
        $this->assertInstanceOf(CacheManager::class, new CacheManager());
    }
}
