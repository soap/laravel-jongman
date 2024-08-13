<?php

namespace Soap\Jongman\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\Jongman\Laravel
 */
class Jongman extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\Jongman\Jongman::class;
    }
}
