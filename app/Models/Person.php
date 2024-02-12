<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'firstName',
        'lastName', 'birthDate', 'sex', 'phone',
        'identityCard', 'status'
    ];
    protected $table = 'Person';
    public $timestamps = false;
    // Relación con pacientes
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    // Relación con usuarios
    public function user()
    {
        return $this->hasOne(User::class);
    }

    // Relación con doctores
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }
    use HasFactory;
}
