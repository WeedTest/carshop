<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->vehicle(),
            'description' => $this->faker->sentence(),
            'price' => rand(50_000, 10_000_000),
            'mileage' =>  rand(1000, 10000),
            'year' => $this->faker->dateTimeThisCentury()->format('Y'),
        ];
    }
}
