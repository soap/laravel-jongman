<?php

namespace Soap\Jongman\Laravel\Commands;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'jongman:install')]
class InstallCommand extends Command
{
    public $signature = 'jongman:install';

    public $description = 'Install the Jongman resources for laravel application';

    public function handle(): int
    {
        $this->callSilent('vendor:publish', [
            '--provider' => JongmanServiceProvider::class,
        ]);

        $this->registerJongmanServiceProvider();

        return self::SUCCESS;
    }

    protected function registerJongmanServiceProvider(): void
    {
        if (! method_exists(ServiceProvider::class, 'addProviderToBootstrapFile')) {
            return;
        }

        ServiceProvider::addProviderToBootstrapFile(App\Providers\JongmanServiceProvider::class);
    }
}
