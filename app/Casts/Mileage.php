<?php

namespace App\Casts;

use App\Services\Format\MileageFormatter;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Mileage implements CastsAttributes
{
    /**
     * Cast the given mileage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $mileage
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $mileage, array $attributes)
    {
        return app(MileageFormatter::class)->format($mileage);
    }

    /**
     * Prepare the given mileage for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $mileage
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $mileage, array $attributes)
    {
        return $mileage;
    }
}
