<?php

namespace App\Services\Format\Money;

use App\Contracts\Services\FormatterContract;

class UemoaPriceFormatter implements FormatterContract
{
    public const CURRENCY = 'FCFA';

    public function format(int|string $price): string
    {
        return str($price)->thousand('.')->spacer(self::CURRENCY);
    }
}
