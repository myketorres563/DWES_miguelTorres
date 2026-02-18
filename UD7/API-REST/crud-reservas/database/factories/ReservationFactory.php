<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'reservation_date' => fake()->date(),
            'guests' => fake()->numberBetween(1, 10),
        ];
    }
}
