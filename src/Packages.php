<?php

namespace MadeForYou\Helpers;

use Illuminate\Container\Container;

class Packages
{
    const PACKAGES = [
        'category' => 'MadeForYou\\Categories\\FilamentCategoriesPlugin',
        'news' => 'MadeForYou\\News\\NewsPlugin',
    ];

    public function usesPackage(string $name): bool
    {
        return Container::getInstance()->resolved(
            self::PACKAGES[$name]
        );
    }
}
