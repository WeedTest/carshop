<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Car
 *
 * @property int $id
 * @property string|null $slug
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $mileage
 * @property int $year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CarFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereYear($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    use HasFactory;

    public function price(): Attribute
    {
        return Attribute::make(get: fn (int $price) => Str::of($price)->thousand()->spacer('FCFA'));
    }

    public function teaser(): Attribute
    {
        return Attribute::make(get: fn () => Str::limit($this->description, 15));
    }
}
