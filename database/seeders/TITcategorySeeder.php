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
                ['name' => 'UI/UX Design'],
                ['name' => 'Software Development'],
                ['name' => 'Web Frameworks'],
                ['name' => 'Database Management'],
                ['name' => 'Other'],

            ]
        );
    }
}
