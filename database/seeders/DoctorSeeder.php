<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Person;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personIds = Person::pluck('idPerson');
        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'licenseNumber' => 'License_' . $i,
                'idPerson' => $personIds->random(),
            ]);
        }
    }
}
