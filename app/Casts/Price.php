<?php

namespace App\Casts;

use App\Services\Format\PriceFormatter;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Price implements CastsAttributes
{
    /**
     * Cast the given price.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $price
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $price, array $attributes)
    {
        return app(PriceFormatter::class)->format($price);
    }

    /**
     * Prepare the given price for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $price
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $price, array $attributes)
    {
        return $price;
    }
}
