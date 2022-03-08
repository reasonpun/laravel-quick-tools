<?php

namespace Reasonpun\LaravelQuickTools\Repositories;

class BaseRepository
{
    public static function make(...$params)
    {
        return new static(...$params);
    }
}
