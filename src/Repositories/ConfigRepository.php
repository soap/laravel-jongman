<?php

namespace Soap\Jongman\Laravel\Repositories;

class ConfigRepository
{
    public function get($key)
    {
        return config($key);
    }
}
