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
    public function run(): void
    {
        //Creamos 4 usuario uno se debe llamar como tú
       User::factory()->create([
            'name' => 'Jose Antonio',
            'email' => 'joseantonio@example.com'
        ]);
       User::factory(3)->create();
    }
}
