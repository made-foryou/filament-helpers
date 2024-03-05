<?php

namespace MadeForYou\Helpers\Contracts;

use Filament\Forms\Components\Builder\Block;
use Illuminate\Contracts\View\View;

interface ContentBlock
{
    public static function getBlock(): Block;

    public static function render(?array $data = null): View;

    public static function id(): string;
}
