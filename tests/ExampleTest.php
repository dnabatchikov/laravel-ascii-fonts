<?php

namespace Dnabatchikov\LaravelAsciiFonts\Tests;

use Orchestra\Testbench\TestCase;
use Dnabatchikov\LaravelAsciiFonts\LaravelAsciiFontsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAsciiFontsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
