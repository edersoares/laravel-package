<?php

namespace VendorName\ClassName\Providers;

use Illuminate\Support\ServiceProvider;
use VendorName\ClassName\Console\Commands\ClassNameCommand;

class ClassNameServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/package_slug_without_prefix.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'package_slug_without_prefix');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ClassNameCommand::class,
            ]);

            $this->loadMigrationsFrom([
                __DIR__ . '/../../database/migrations',
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/package_slug_without_prefix.php', 'package_slug_without_prefix');
    }
}
