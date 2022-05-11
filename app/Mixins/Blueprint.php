<?php

namespace App\Mixins;

use Closure;
use Illuminate\Database\Schema\ColumnDefinition as CD;


/**
 * App\Mixins\Blueprint
 *
 * @method static \Illuminate\Database\Schema\ColumnDefinition string(string $column, int|null $length = null)
 */
class Blueprint
{
    public function slug(): Closure
    {
        return fn (): CD => $this->string('slug')
            ->unique()
            ->nullable();
    }
}
