<?php

namespace App\Services\Format\Methods\Money;

use App\Contracts\Services\FormatterContract;

class EuroPriceMethod implements FormatterContract
{
    public const CURRENCY = '€';
    public const DIFFERENCE = 650;

    public function format(int|string $price): string
    {
        return str($price / self::DIFFERENCE)
            ->thousand('.')
            ->append(self::CURRENCY);
    }
}
