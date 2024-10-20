<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'middle_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'gender' => random_int(1, 10),
            'birthed_at' => fake()->date(),
            'address' => fake()->address(),
            'specialization' =>fake()->word(),
            'balance' => random_int(1, 2000),
            'login' => fake()->name(),
        ];
    }
}
