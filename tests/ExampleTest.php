<?php

namespace TashariWebDev\LivewireUsers\Tests;

use Orchestra\Testbench\TestCase;
use TashariWebDev\LivewireUsers\LivewireUsersServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LivewireUsersServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
