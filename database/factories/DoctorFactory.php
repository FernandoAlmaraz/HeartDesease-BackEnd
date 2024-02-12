<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'licenseNumber' => $this->faker->numerify('#########'), // Genera un número de licencia aleatorio
            'idPerson' => $this->faker->unique()->numberBetween(1, 100), // Genera un ID de persona aleatorio
        ];
    }
}
