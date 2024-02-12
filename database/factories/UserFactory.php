<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rol' => $this->faker->randomElement([1, 2, 3]), // Aquí puedes definir tus roles según tus necesidades
            'user' => $this->faker->userName,
            'password' => Hash::make('password'), // Hasheamos la contraseña por defecto 'password'
            'idPerson' => function () {
                return \App\Models\Person::factory()->create()->idPerson;
            }
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
