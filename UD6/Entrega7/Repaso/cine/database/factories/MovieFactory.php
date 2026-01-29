<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'title' => fake()->unique()->sentence(3),
        'year' => fake()->numberBetween(1990, 2025),
        'genre' => fake()->randomElement(['Drama','Comedia','Acción','Thriller','Sci-Fi']),
        'synopsis' => fake()->paragraph(),
    ];
}

}
