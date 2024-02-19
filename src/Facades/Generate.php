<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class Generate extends Facade
{
    public static string $key = 'made-foryou-generate';

    protected static function getFacadeAccessor(): string
    {
        return self::$key;
    }

}
