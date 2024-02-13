<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existingIds = Person::pluck('idPerson');

        // Crear pacientes con idPerson existentes
        \App\Models\Patient::factory(10)->create([
            'idPerson' => $existingIds->random() // Seleccionar un idPerson aleatorio de los existentes
        ]);
    }
}
