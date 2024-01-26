<?php

namespace MadeForYou\Helpers\Contracts;

use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Builder\Block;

interface ContentBlock
{
    public function getBlock(): Block;

    public function render(): View;

    public static function id(): string;
}
