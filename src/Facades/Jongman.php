<?php

namespace Soap\Jongman\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\Jongman\Jongman
 */
class Jongman extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\Jongman\Jongman::class;
    }
}
