<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class AccountFilter extends ApiFilter
{
    protected $safeParams = [
        'role' => ['eq'],
        'user' => ['eq'],
        'idPerson' => ['eq'],
    ];
    protected $operatorMap = [
        'eq' => "="
    ];
}
