<?php

namespace MadeForYou\Helpers;

use Illuminate\Container\Container;
use MadeForYou\Helpers\Enums\FilamentPackage;

/**
 * Class Packages
 *
 * This class provides methods to check if a FilamentPackage is being used in the application.
 */
class Packages
{
    /**
     * Checks if the FilamentPackage is being used in the application.
     *
     * @param  FilamentPackage  $package  The Filament package to check.
     *
     * @return bool Returns true if the package is being used, otherwise false.
     */
    public function uses(FilamentPackage $package): bool
    {
        return Container::getInstance()->resolved(
            $package->plugin()
        );
    }
}
