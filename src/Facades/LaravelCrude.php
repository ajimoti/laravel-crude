<?php

namespace Ajimoti\LaravelCrude\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajimoti\LaravelCrude\LaravelCrude
 */
class LaravelCrude extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-crude';
    }
}
