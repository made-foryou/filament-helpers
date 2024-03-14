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
 */
interface ModelWithContentBlocks
{
    /**
     * Returns the content from the model.
     *
     * The content parts will be transformed into the specified
     * ContentBlock objects.
     *
     * @param  string|null  $key  Key for when you have multiple fields with
     *                            the content blocks.
     *
     * @return Collection<ContentBlock>
     */
    public function getContents(?string $key = null): Collection;
}
