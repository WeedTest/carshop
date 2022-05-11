<?php

namespace App\Contracts\Services;

interface FormatterContract
{
    public function format(int|string $value);
}
