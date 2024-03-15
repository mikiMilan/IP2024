<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->sentence('3'),
            'status' => $this->faker->randomElement(['o', 'i']),
            'ECTS' => $this->faker->numberBetween(2,10),
            'opis' => $this->faker->paragraph()
        ];
    }
}
