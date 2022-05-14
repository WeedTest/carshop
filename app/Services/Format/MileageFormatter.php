<?php

namespace App\Services\Format;

use Illuminate\Support\Str;
use App\Contracts\Services\FormatterContract;

class MileageFormatter implements FormatterContract
{
    public function __construct(private string $unit)
    {
    }

    public function format(int|string $mileage): string
    {
        return Str::of($mileage)->append("/$this->unit");
    }
}
