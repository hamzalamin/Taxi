<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\CitiesModel;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = CitiesModel::all();
        // dd($cities);
         return view('chauffeur.index', compact('cities'));
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
    public function show(Trajet $trajet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trajet $trajet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trajet $trajet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trajet $trajet)
    {
        //
    }

    public function addTrajet(Request $request)
    {
        // dd($request);
    // Validate the form data
    $validatedData = $request->validate([
        'from' => 'required',
        'to' => 'required',
        'TypeOfpayment' => 'required',
    ]);
    // dd($validatedData);

    // Create a new Trajet instance and store the data
    // $trajet = new Trajet();
    // $trajet->from_city_id = $validatedData['from'];
    // $trajet->to_city_id = $validatedData['to'];
    // $trajet->date = $validatedData['date'];
    // $trajet->driver_id = auth()->user()->id; // Assuming driver ID is stored in the 'driver_id' field
    // $trajet->save();
    trajet::create([
        'departure_city_id' => $validatedData['from'],
        'destination_city_id' => $validatedData['to'],
        'TypeOfpayment' => $validatedData['TypeOfpayment'],
        'driver_id' => Auth::id(),
    ]);
    return redirect(route('Chaufeur.index'));
    
    // Retrieve cities data again after adding the trajet
   
}
// public function showForm()
// {
//     $cities = citiesModel::all();
//     return view('layouts.chauffeur', compact('cities'));
// }

}