<?php

declare(strict_types=1);

namespace Davarch\Stubs\Tests;

use Davarch\Stubs\StubsServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param  Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
