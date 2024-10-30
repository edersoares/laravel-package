<?php

namespace VendorName\ClassName\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\ClassName\Providers\ClassNameServiceProvider;

class TestCase extends Orchestra
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'VendorNameEscaped\\ClassName\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );

        Factory::guessModelNamesUsing(
            fn ($factory) => 'VendorNameEscaped\\ClassName\\Models\\' . Str::replaceLast('Factory', '', class_basename($factory))
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            ClassNameServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}
