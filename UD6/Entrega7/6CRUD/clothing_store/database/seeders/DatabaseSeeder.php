<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        User::factory(10)->create();

            // Aqui vamos a añadir los diferentes Seeders que creemos
            // User::UserSeeder::class; "Ejemplo de llamada a otro seeder"


        User::factory()->create([
            'name' => 'Derek Rosa',
            'email' => 'cambioBreve@example.com',
        ]);



         //Using DB facade to insert data directly
        // This is an alternative to using model factories
        // and allows for quick seeding of the database without needing to define a factory.
        // It is useful for simple seed data or when you want to quickly populate the database with
        // some initial data without the overhead of creating a factory.

        // seed the users table with 10 random users
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
            ]);
        }

        // seed the products table with 12 random products

        for ($i = 0; $i < 12; $i++) {
        DB::table('clothing_items')->insert([
            'name' => Str::random(10),
            'size' => Str::random(5), // Assuming size is a string
            'price' => rand(10, 100),
            'color' => Str::random(5), // Assuming color is a string
        ]);
        }
    }
}
