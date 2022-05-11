<?php

namespace App\Services\Format;

use App\Contracts\Services\FormatterContract;

class PriceFormatter implements FormatterContract
{
    public function __construct(private FormatterContract $formatter)
    {
    }

    public function format(int|string $price): string
    {
        return $this->formatter->format($price);
    }
}
