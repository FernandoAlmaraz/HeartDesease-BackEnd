<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ConsultFilter extends ApiFilter
{
    protected $safeParams = [
        'age' => ['eq', 'lt', 'lte'],
        'sex' => ['eq'],
        'idDoctor' => ['eq'],
        'idPatient' => ['eq'],
        'consultDate' => ['eq'],
        'status' => ['eq']
    ];
    protected $columnMap = [
        'age' => 'age'
    ];
    protected $operatorMap = [
        'eq' => "="
    ];
}
