<?php

use VendorName\ClassName\Models\ClassName;

test('command exists', function () {
    $this->artisan('package_slug_without_prefix')
        ->expectsOutput(':package_description')
        ->assertSuccessful();
});

test('route exists', function () {
    $this->get('package_slug_without_prefix')
        ->assertSee(':package_description')
        ->assertOk();
});

test('database table is empty', function () {
    $this->assertDatabaseEmpty(ClassName::class);
});
