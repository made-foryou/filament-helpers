<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool uses(string $name)t
 */
class Packages extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'packages';
    }
}
