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
        'numero_pedido' => 'PED-' . $this->faker->unique()->numberBetween(10000, 99999),
        'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
        'estado' => $this->faker->randomElement(['pendiente', 'enviado', 'entregado', 'cancelado']),
        'total' => $this->faker->randomFloat(2, 20, 500),
        'notas' => $this->faker->sentence(),
    ];
}
}
