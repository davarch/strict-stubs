<?php

declare(strict_types=1);

namespace Davarch\Stubs;

use Illuminate\Support\ServiceProvider;

final class StubsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubsPublishCommand::class,
            ]);
        }
    }
}
