<?php

namespace MadeForYou\Helpers\Facades;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Facade;

/**
 * @method static HtmlString filamentLink(string $link, string $title, ?string $tooltip = null)
 */
class Generate extends Facade
{
    public static string $key = 'made-foryou-generate';

    protected static function getFacadeAccessor(): string
    {
        return self::$key;
    }

}
