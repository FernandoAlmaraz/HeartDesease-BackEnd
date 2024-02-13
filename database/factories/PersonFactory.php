<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'birthDate' => $this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'), // Edad entre 18 y 80 años
            'sex' => $this->faker->randomElement([0, 1]), // Género aleatorio
            'phone' => $this->faker->phoneNumber,
            'identityCard' => $this->faker->numerify('############'), // Número de identidad aleatorio
            'status' => $this->faker->randomElement([0, 1]), // Estado aleatorio
        ];
    }
}
