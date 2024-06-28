<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Muhammad Ali',
            'email' => 'ali@example.com',
            'role' => 'admin',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'full_name' => 'Muhammad Ilyas',
            'email' => 'ilyas@example.com',
            'role' => 'user',
            'password' => Hash::make('password123'),
        ]);
    }
}
