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
            'name' => 'Isaac Ferpin',
            'email' => 'aria@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jose Xokas',
            'email' => 'borin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dani Peluchito',
            'email' => 'selene@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}