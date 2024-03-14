<?php

namespace MadeForYou\Helpers\Contracts;

use Filament\Forms\Components\Builder\Block;
use Illuminate\Contracts\View\View;

interface ContentBlock
{
    public function __construct(array $data = []);

    public static function getBlock(): Block;

    public function render(): View;

    public static function id(): string;
}
