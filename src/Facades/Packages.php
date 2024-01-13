<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class Packages extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'packages';
    }
}
