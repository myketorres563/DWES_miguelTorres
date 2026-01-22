<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // En el método run():
public function run(): void
{
    \App\Models\Client::factory(10) // Crea 10 clientes
        ->hasOrders(3)              // ... y a cada uno, ponle 3 pedidos
        ->create();
}
}
