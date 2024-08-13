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
                'create_schedule_layouts_table',
                'create_time_blocks_table',
                'create_schedules_table',
                'add_timezone_to_users_table',
                'create_resources_table',
                'create_reservation_series_table',
                'create_reservation_instances_table',
                'create_reservation_resources_table',
                'create_blackout_series_table',
                'create_blackout_instances_table',
            ])
            ->hasCommand(InstallCommand::class);
    }
}
