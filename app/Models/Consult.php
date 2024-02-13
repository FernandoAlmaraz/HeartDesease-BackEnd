<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;

    protected $table = 'consults'; // Especifica el nombre de la tabla

    protected $primaryKey = 'idConsult'; // Especifica el nombre de la clave primaria

    public $timestamps = false; // No necesitamos los campos timestamps

    protected $fillable = [
        'idDoctor',
        'idPatient',
        'age',
        'sex',
        'systolicPressure',
        'diastolicPressure',
        'cigsPerDay',
        'prevalentHyp',
        'glucose',
        'bloodPressureMeds',
        'diabetic',
        'diagnostic',
        'status',
        'consultDate'
    ]; // Especifica los campos que se pueden asignar masivamente


    // Relación con el modelo Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'idDoctor');
    }

    // Relación con el modelo Patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'idPatient');
    }
}
