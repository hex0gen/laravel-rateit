<?php

namespace Hex0gen\LaravelRateit\Tests;

use Orchestra\Testbench\TestCase;
use Hex0gen\LaravelRateit\LaravelRateitServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelRateitServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
