<?php

namespace Database\Factories;

use App\Models\Bike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => fake()->unique()->regexify('[A-Z0-9]{10}'),
            'model' => fake()->word(),
            'price_per_hour' => fake()->randomFloat(2, 5, 50),
            'status' => fake()->randomElement(['available', 'maintenance', 'retired']),
        ];
    }
}
