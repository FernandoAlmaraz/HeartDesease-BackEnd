<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => $this->faker->randomElement([0, 1]), // Aquí puedes definir tus roles según tus necesidades
            'user' => $this->faker->userName,
            'password' => Hash::make('password'), // Hasheamos la contraseña por defecto 'password'
            'idPerson' => function () {
                return \App\Models\Person::factory()->create()->idPerson;
            }
        ];
    }
}
