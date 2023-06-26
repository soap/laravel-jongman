<?php

namespace Soap\Jongman;

use Soap\Jongman\Commands\JongmanCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JongmanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('jongman')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-jongman_table')
            ->hasCommand(JongmanCommand::class);
    }
}
