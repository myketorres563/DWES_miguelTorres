<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {

        // Create exactly three users with predictable IDs (1..3)
        User::create([
            'name' => 'Jose Nightwind',
            'email' => 'jose@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Antonio Stonehelm',
            'email' => 'antonio@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Ariza Riversong',
            'email' => 'ariza@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}