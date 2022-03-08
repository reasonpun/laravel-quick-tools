<?php

namespace Reasonpun\LaravelQuick\Services;

use Illuminate\Support\Traits\Macroable;

class BaseService
{
    /**
     * @param mixed ...$params
     * @return BaseService
     */
    public static function make(...$params)
    {
        return new static(...$params);
    }
}
