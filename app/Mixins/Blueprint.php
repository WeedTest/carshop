<?php

namespace App\Mixins;

use Closure;
use Illuminate\Database\Schema\ColumnDefinition as CD;


/**
 * App\Mixins\Blueprint
 *
 * @method static \Illuminate\Database\Schema\ColumnDefinition string(string $column, int|null $length = null)
 * @method static \Illuminate\Database\Schema\ColumnDefinition boolean(string $column)
 */
class Blueprint
{
    public function slug(): Closure
    {
        return fn (): CD => $this->string('slug')
            ->unique()
            ->nullable();
    }

    public function active(): Closure
    {
        return fn (): CD => $this->boolean('active')
            ->default(0);
    }
}
