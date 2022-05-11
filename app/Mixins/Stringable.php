<?php

namespace App\Mixins;

use Closure;
use Illuminate\Support\Stringable as SupportStr;

/**
 * App\Mixins\Stringable
 *
 * @property-read string $value
 * @method \Illuminate\Support\Stringable append(...$values)
 */
class Stringable
{
    public function thousand(): Closure
    {
        return function (string $separator  = ' '): SupportStr {
            return new SupportStr(number_format($this->value, 0, '', $separator));
        };
    }

    public function spacer()
    {
        return function (...$values): SupportStr {
            return $this->append(' ', ...$values);
        };
    }
}
