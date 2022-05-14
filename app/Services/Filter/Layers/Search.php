<?php

namespace App\Services\Filter\Layers;

class Search
{
    public function filter($builder, $value)
    {
        return $builder->where('name', 'LIKE', "%$value%");
    }
}
