<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TITtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'title' => 'Design the landing page',
                'description' => 'Initial layout for homepage',
                'category_id' => 1,
                'priority' => 'Medium',
                'status' => 'Pending',
                'assigned_to' => 2,
                'deadline' => Carbon::now()->addDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Develop the landing page',
                'description' => 'Homepage coding',
                'category_id' => 2,
                'priority' => 'High',
                'status' => 'Pending',
                'assigned_to' => 3,
                'deadline' => Carbon::now()->addDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
