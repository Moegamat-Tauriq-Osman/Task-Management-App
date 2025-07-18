<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TITcategory;

class TITcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TITcategory::insert(
            [
                ['name' => 'Cybersecurity'],
                ['name' => 'Software Development'],
                ['name' => 'DevOps'],
                ['name' => 'Database Management'],
                ['name' => 'IT Support'],
                ['name' => 'Project Management'],

            ]
        );
    }
}