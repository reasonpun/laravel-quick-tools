<?php

namespace Reasonpun\LaravelQuickTools\Services;

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
