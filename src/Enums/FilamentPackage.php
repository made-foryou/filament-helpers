<?php

namespace MadeForYou\Helpers\Enums;

/**
 * Class FilamentPackage
 *
 * This enum represents the available Filament packages.
 * Each package is associated with a specific string value
 * and has a corresponding plugin namespace.
 */
enum FilamentPackage: string
{
    case News = 'news';
    case Category = 'categories';
    case Content = 'content';

    /**
     * Returns the plugin namespace based on the given value of $this.
     *
     * @return string The fully qualified namespace of the plugin.
     */
    public function plugin(): string
    {
        return match ($this) {
            self::News => 'MadeForYou\\News\\NewsServiceProvider',
            self::Category => 'MadeForYou\\Categories\\FilamentCategoriesServiceProvider',
            self::Content => 'MadeForYou\\FilamentContent\\FilamentContentServiceProvider',
        };
    }
}
