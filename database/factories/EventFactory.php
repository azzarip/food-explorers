<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'scheduled_at' => fake()->dateTimeBetween('-1 year', '+1 year'),
            'capacity' => fake()->numberBetween(6, 12),
            'location_id' => fake()->numberBetween(0, 100),
        ];
    }
}
