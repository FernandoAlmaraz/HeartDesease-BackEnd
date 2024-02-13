<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PatientFilter extends ApiFilter
{
    protected $safeParams = [
        'securityNumber' => ['eq'],
        'idPerson' => ['eq'],
    ];
    protected $operatorMap = [
        'eq' => "="
    ];
}
