<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['securityNumber', 'idPerson'];
    protected $table = 'patients';
    protected $primaryKey = 'idPatient';
    public $timestamps = false;
    // Relación con persona
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    use HasFactory;
}
