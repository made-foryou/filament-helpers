<?php

namespace MadeForYou\Helpers;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Blade;

class Generate
{
    public function filamentLink(
        string $link,
        string $title,
        ?string $tooltip = null,
    ): HtmlString {
        return new HtmlString(Blade::render('filament::components.link', [
            'color' => 'primary',
            'tooltip' => $tooltip,
            'href' => $link,
            'target' => '_blank',
            'slot' => $title,
            'icon' => 'heroicon-o-arrow-top-right-on-square',
        ]));
    }
}
