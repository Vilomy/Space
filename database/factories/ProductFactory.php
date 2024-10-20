<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'price' => random_int(1, 1000),
            'description' => fake()->word(),
            'category' => fake()->word(),
            'doctor' => fake()->word(),
            'price_with_disc' => random_int(1, 1000),
        ];
    }
}
