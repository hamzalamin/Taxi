<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\search;
use App\Models\Trajet;
use App\Models\reservation as ModelsReservation;
use Illuminate\Http\Request;
// use App\Models\ModelsReservation;

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
        
        $trajets = Trajet::join('drivers', 'trajet.driver_id', '=', 'drivers.id')
                         ->join('users', 'drivers.user_id', '=', 'users.id')
                         ->select('users.name', 'drivers.license_number', 'drivers.car_model', 'trajet.*')
                         ->where('trajet.departure_city_id', $fromCityId)
                         ->where('trajet.destination_city_id', $toCityId)
                         ->where('drivers.status' ,'=' , 1)
                         ->get();

        $reservationsCount = ModelsReservation::select('trajet_id')
        ->selectRaw('COUNT(trajet_id) as reservations_count')
        ->groupBy('trajet_id')
        ->get();
                      
        // dd($reservationsCount);
                                  
    
        return view('binary.search', compact('trajets', 'reservationsCount'));
    }
    
    
}
