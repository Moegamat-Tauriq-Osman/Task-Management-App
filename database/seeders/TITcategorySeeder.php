<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TITcategory;
use Faker\Guesser\Name;

class TITcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       TITcategory::factory()->count(12)->create();
        
    }
}
