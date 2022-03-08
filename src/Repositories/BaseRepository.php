<?php

namespace Reasonpun\LaravelQuick\Repositories;

class BaseRepository
{
    public static function make(...$params)
    {
        return new static(...$params);
    }
}
