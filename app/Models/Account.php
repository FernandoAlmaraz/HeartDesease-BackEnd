<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'role',
        'user',
        'password',
        'idPerson',
    ];
    public function person()
    {
        return $this->belongsTo(Person::class, 'idPerson');
    }

    use HasFactory;
}
