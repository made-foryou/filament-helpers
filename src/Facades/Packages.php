<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\Facades\Facade;
use MadeForYou\Helpers\Enums\FilamentPackage;

/**
 * @method static bool uses(FilamentPackage $package)
 *
 * @mixin \MadeForYou\Helpers\Packages
 */
class Packages extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'packages';
    }
}
