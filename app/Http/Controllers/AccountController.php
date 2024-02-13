<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Http\Resources\AccountCollection;
use App\Filters\AccountFilter;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index(Request $request)
    {
        $filter = new AccountFilter();
        $queryItems = $filter->transform($request);
        $includePerson = $request->query('include');
        $accounts = Account::where($queryItems);
        if ($includePerson) {
            $accounts = $accounts->with('person');
        }
        return new AccountCollection($accounts->paginate()->appends($request->query()));
    }


    public function create()
    {
    }


    public function store(StoreAccountRequest $request)
    {
    }


    public function show(Account $account)
    {
    }


    public function edit(Account $account)
    {
    }


    public function update(UpdateAccountRequest $request, Account $account)
    {
    }


    public function destroy(Account $account)
    {
    }
}
