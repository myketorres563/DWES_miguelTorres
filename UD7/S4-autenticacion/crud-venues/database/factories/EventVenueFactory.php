<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventVenue>
 */
class EventVenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'name' => 'Venue ' . $this->faker->unique()->word(),
            'capacity' => $this->faker->numberBetween(50, 5000),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
        ];
    }
}
