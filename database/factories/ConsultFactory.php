<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consult>
 */
class ConsultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idDoctor' => $this->faker->numberBetween(1, 10),
            'idPatient' => $this->faker->numberBetween(1, 10),
            'age' => $this->faker->numberBetween(18, 80),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'systolicPressure' => $this->faker->numberBetween(100, 180),
            'diastolicPressure' => $this->faker->numberBetween(60, 120),
            'cigsPerDay' => $this->faker->numberBetween(0, 20),
            'prevalentHyp' => $this->faker->numberBetween(0, 1),
            'glucose' => $this->faker->numberBetween(60, 200),
            'bloodPressureMeds' => $this->faker->numberBetween(0, 1),
            'diabetic' => $this->faker->numberBetween(0, 1),
            'diagnostic' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'status' => $this->faker->numberBetween(0, 1),
            'consultDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updateDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
