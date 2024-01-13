<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method bool usesPackages(string $name)
 */
class Packages extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'packages';
    }
}
