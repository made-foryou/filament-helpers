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

    public function registeringPackage(): void
    {
        $this->app->bind(
            'packages',
            function ($app) {
                return new Packages();
            }
        );

        $this->app->bind(
            \MadeForYou\Helpers\Facades\Generate::$key,
            function ($app) {
                return new Generate();
            }
        );
    }
}
