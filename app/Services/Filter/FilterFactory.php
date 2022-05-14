<?php

namespace App\Services\Filter;

use Illuminate\Database\Eloquent\Builder;

class FilterFactory
{
    public function __construct(
        private Filter $filter,
        private Builder $query
    ) {
    }
}
