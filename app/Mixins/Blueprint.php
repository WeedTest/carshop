<?php

namespace App\Mixins;

use Closure;
use Illuminate\Database\Schema\Blueprint as SB;
use Illuminate\Database\Schema\ColumnDefinition;

class Blueprint
{
    public function slug(): Closure
    {
        return $this->loader(function (SB $table): ColumnDefinition {
            return $table->string('slug')
                ->unique()
                ->nullable();
        });
    }

    private function loader(Closure $callback): Closure
    {
        return fn () => value($callback, $this);
    }
}
