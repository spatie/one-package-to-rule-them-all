<?php

namespace spatie\OnePackageToRuleThemAll;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use spatie\OnePackageToRuleThemAll\Commands\PackageInspireCommand;

final class OnePackageToRuleThemAllServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('one-package-to-rule-them-all')
            ->hasConfigFile()
            ->hasCommand(PackageInspireCommand::class);
    }
}
