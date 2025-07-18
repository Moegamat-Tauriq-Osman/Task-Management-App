<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin ',
            'email' => 'admin@example.com',
            'role' => 'Admin',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'Tauriq ',
            'email' => 'tauriq@example.com',
            'role' => 'Team Member',
            'password' => Hash::make('Tauriq'),
        ]);

        User::factory()->create([
            'name' => 'Talia ',
            'email' => 'Talia@example.com',
            'role' => 'Team Member',
            'password' => Hash::make('Talia'),
        ]);

        User::factory()->create([
            'name' => 'Imaad ',
            'email' => 'Imaad@example.com',
            'role' => 'Team Member',
            'password' => Hash::make('Imaad'),
        ]);

        User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@example.com',
            'password' => Hash::make('Guest'),
            'role' => 'Guest',
        ]);

        User::factory()->count(10)->create();
    }
}
