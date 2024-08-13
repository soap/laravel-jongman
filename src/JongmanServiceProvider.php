<?php

namespace Soap\Jongman\Laravel;

use Soap\Jongman\Laravel\Commands\InstallCommand;
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
            ->hasMigrations([
                'create_laravel-jongman_table',
            ])
            ->hasCommand(InstallCommand::class);
    }
}
