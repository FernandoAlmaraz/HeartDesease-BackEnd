<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConsultCollection;
use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consults = Consult::paginate();
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
