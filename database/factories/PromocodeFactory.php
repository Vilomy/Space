<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocode>
 */
class PromocodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->word(),
            'value' => random_int(100, 10000),
            'expired_at' => fake()->date(),
            'limit_from' => random_int(1,10),
            'user' => fake()->name()
        ];
    }
}
