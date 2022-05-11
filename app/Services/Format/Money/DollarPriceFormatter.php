<?php

namespace App\Services\Format\Money;

use App\Contracts\Services\FormatterContract;

class DollarPriceFormatter implements FormatterContract
{
    public const CURRENCY = '$';
    public const DIFFERENCE = 500;

    public function format(int|string $price): string
    {
        return str($price / self::DIFFERENCE)->thousand('.')->prepend(self::CURRENCY);
    }
}
