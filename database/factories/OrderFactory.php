<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_table' => fake()->numberBetween(1,12),
            'count_guests' => fake()->numberBetween(1,8),
            'order' => fake()->text(60),
            'category_id' => fake()->numberBetween(1,4)
        ];
    }
}
