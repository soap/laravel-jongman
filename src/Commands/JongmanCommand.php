<?php

namespace Soap\Jongman\Commands;

use Illuminate\Console\Command;

class JongmanCommand extends Command
{
    public $signature = 'laravel-jongman';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
