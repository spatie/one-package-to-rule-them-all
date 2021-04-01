<?php

namespace spatie\OnePackageToRuleThemAll\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use spatie\OnePackageToRuleThemAll\OnePackageToRuleThemAllServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            OnePackageToRuleThemAllServiceProvider::class,
        ];
    }
}
