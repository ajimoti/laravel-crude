<?php

namespace Ajimoti\LaravelCrude;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ajimoti\LaravelCrude\Commands\LaravelCrudeCommand;

class LaravelCrudeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-crude')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-crude_table')
            ->hasCommand(LaravelCrudeCommand::class);
    }
}
