<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'securityNumber' => $this->faker->bothify('??##??#####'), // Genera un número de seguridad aleatorio
            'idPerson' => $this->faker->unique()->numberBetween(1, 100), // Genera un ID de persona aleatorio
        ];
    }
}
