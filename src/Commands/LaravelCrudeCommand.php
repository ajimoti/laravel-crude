<?php

namespace Ajimoti\LaravelCrude\Commands;

use Illuminate\Console\Command;

class LaravelCrudeCommand extends Command
{
    public $signature = 'laravel-crude';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
