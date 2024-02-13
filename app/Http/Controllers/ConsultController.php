<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConsultCollection;
use App\Models\Consult;
use Illuminate\Http\Request;
use App\Filters\ConsultFilter;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ConsultFilter();
        $queryItems = $filter->transform($request);
        $includePersons = $request->query('include');
        $consults = Consult::where($queryItems);
        if ($includePersons) {
            $consults = $consults->with('doctor', 'patient');
        }
        return new ConsultCollection($consults);
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
    public function show(Consult $consult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consult $consult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consult $consult)
    {
        //
    }
}