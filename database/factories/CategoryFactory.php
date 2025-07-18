<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name' => $this->faker->randomElement([
                'Cybersecurity',
                'Cloud Computing',
                'DevOps',
                'Data Science',
                'Networking',
                'UI/UX Design',
                'Software Development',
                'Web Frameworks',
                'Database Management',
                'Machine Learning',
                'IT Support',
                'Project Management',
            ]),
        ];
    }
}
