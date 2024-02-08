<?php

namespace App\Http\Controllers;

use App\Models\search;
use App\Models\Trajet;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('binary.search');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(search $search)
    {
        //
    }
    public function search(Request $request)
    {
        $fromCityId = $request->input('from');
        $toCityId = $request->input('to');

        $trajets = Trajet::where('departure_city_id', $fromCityId)
                        ->where('destination_city_id', $toCityId)
                        ->get();

        return view('binary.search', ['trajets' => $trajets]);
    }
}
