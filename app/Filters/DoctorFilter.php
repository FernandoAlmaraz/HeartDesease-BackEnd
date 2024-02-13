<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class DoctorFilter extends ApiFilter
{
    protected $safeParams = [
        'licenseNumber' => ['eq'],
        'idPerson' => ['eq'],
    ];
    protected $operatorMap = [
        'eq' => "="
    ];
}
