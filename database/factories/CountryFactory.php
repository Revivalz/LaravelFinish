<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->country(),
            'area_km2' => $this->faker->randomFloat(2, 1000, 999999),
            'population' => $this->faker->numberBetween(1000000, 1400000000),
        ];
    }
}
