<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $primaryKey = 'idPerson';

    protected $fillable = [
        'firstName',
        'lastName',
        'birthDate',
        'sex',
        'phone',
        'identityCard',
        'status',

    ];

    public $timestamps = false;
    // Definir relaciones
    public function patients()
    {
        return $this->hasMany(Patient::class, 'idPerson');
    }

    public function account()
    {
        return $this->hasOne(Account::class, 'idPerson');
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'idPerson');
    }
}
