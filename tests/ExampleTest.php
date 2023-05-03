<?php

namespace spatie\OnePackageToRuleThemAll\Tests;

final class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_inspire_you_to_build_a_package()
    {
        $this->artisan('package:inspire')->assertExitCode(0);
    }
}
