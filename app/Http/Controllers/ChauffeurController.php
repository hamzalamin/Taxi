<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use Database\Seeders\chaufaur;
use Illuminate\Support\Facades\Auth;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return 'hi';
        
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
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function informationOfDriver(Request $request)
    {
        // Ensure that the user is authenticated
        if (Auth::check()) {
            $userId = Auth::id();
                $validatedData = $request->validate([
                'license_number' => 'required',
                'car_model' => 'required',
                'profile' => 'required',
            ]);
    
            // Create a new Chauffeur record with the provided data and the user_id set to the authenticated user's ID
            Chauffeur::create([
                'license_number' => $validatedData['license_number'],
                'car_model' => $validatedData['car_model'],
                'profile' => $validatedData['profile'],
                'user_id' => $userId, 
            ]);
    
            return redirect()->back()->with('success', 'Chauffeur information saved successfully.');
        } else {
            return redirect()->route('login')->with('error', 'Please log in to continue.');
        }
    }
}
