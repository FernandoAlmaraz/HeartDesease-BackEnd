<?php

namespace App\Http\Controllers;

use App\Filters\PersonFilter;
use App\Http\Resources\PersonCollection;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new PersonFilter();
        $queryItems = $filter->transform($request);
        $includePa = $request->query('inclPa');
        $includeAcc = $request->query('inclAcc');
        $includeDoc = $request->query('inclDoc');
        $persons = Person::where($queryItems);
        if ($includePa) {
            $persons = $persons->with('patients');
        }
        if ($includeAcc) {
            $persons = $persons->with('account');
        }
        if ($includeDoc) {
            $persons = $persons->with('doctor');
        }
        return new PersonCollection($persons->paginate()->appends($request->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
