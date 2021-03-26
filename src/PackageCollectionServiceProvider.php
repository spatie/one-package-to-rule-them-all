<?php

namespace spatie\PackageCollection;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\PackageCollection\Commands\PackageCollectionCommand;

class PackageCollectionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('one-package-to-rule-them-all')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_one_package_to_rule_them_all_table')
            ->hasCommand(PackageCollectionCommand::class);
    }
}
