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
        User::create([
            'name' => 'Admin ',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'name' => 'Tauriq ',
            'email' => 'moegamattauriqosman@gmail.com',
            'role' => 'Team Member',
            'password' => Hash::make('Tauriq'),
        ]);

        User::create([
            'name' => 'Talia ',
            'email' => 'Talia@gmail.com',
            'role' => 'Team Member',
            'password' => Hash::make('Talia'),
        ]);

        User::create([
            'name' => 'Imaad ',
            'email' => 'Imaad@gmail.com',
            'role' => 'Team Member',
            'password' => Hash::make('Imaad'),
        ]);

        User::create([
            'name' => 'Guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('Guest'),
            'role' => 'Guest',
        ]);
    }
}
