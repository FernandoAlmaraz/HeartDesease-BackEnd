<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['licenseNumber', 'idPerson'];
    protected $table = 'Doctor'; // Especifica el nombre de la tabla

    protected $primaryKey = 'idDoctor'; // Especifica el nombre de la clave primaria

    public $timestamps = false; // No necesitamos los campos timestamps

    // Relación con persona
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    use HasFactory;
}
