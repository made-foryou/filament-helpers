<?php

namespace MadeForYou\Helpers\Models;

use Illuminate\Support\Collection;
use MadeForYou\Helpers\Contracts\ContentBlock;

/**
 * ## Model with content blocks
 *
 * Contract for using content blocks as part of the model contents which
 * specify a Filament Block and a font-end view file.
 *
 * @author Menno Tempelaar <menno@made-foryou.nl>
 * @package made-foryou/filament-helpers
 */
interface ModelWithContentBlocks
{
    /**
     * Returns the content from the model.
     *
     * The content parts will be transformed into the specified
     * ContentBlock objects.
     *
     * @return Collection<ContentBlock>
     */
    public function getContents(): Collection;
}
