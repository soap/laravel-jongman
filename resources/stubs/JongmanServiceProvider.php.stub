<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Soap\Jongman\Core\Factories\ScheduleLayoutFactory;
use Soap\Jongman\Core\Interfaces\LayoutFactoryInterface;

class JongmanServiceProvider extends ServiceProvider
{
    public function boot() {}

    public function register()
    {
        app()->bind(LayoutFactoryInterface::class, ScheduleLayoutFactory::class);
    }
}
