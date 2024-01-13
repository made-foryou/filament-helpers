<?php

namespace MadeForYou\Helpers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-helpers');
    }

    public function registeringPackage()
    {
        $this->app->bind('packages', function ($app) {
            return new Packages();
        });
    }
}
