<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PersonFilter extends ApiFilter
{
    protected $safeParams = [
        'firstName' => ['eq'],
        'lastName' => ['eq'],
        'birthDate' => ['eq'],
        'sex' => ['eq'],
        'phone' => ['eq'],
        'idPerson' => ['eq'],
        'identityCard' => ['eq'],
        'status' => ['eq'],
    ];
    protected $operatorMap = [
        'eq' => "="
    ];
}
