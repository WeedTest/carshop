<?php

namespace App\Services\Filter\Buckets;

use App\Services\Filter\Filter;
use App\Services\Filter\Layers\Search;

class CarBucket extends Filter
{
    protected array $filters = [
        'search' => Search::class
    ];
}
