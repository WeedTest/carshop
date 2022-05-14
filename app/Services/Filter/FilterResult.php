<?php

namespace App\Services\Filter;

use Illuminate\Database\Eloquent\Builder;

class FilterResult extends Builder
{
    private Filter $filter;

    public function setFilter(Filter $filter): void
    {
        $this->filter = $filter;
    }

    public function getFilter(): Filter
    {
        return $this->filter;
    }
}
