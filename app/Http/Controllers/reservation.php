<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trajet;
use App\Models\citiesModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use App\Models\reservation as ModelsReservation;
  // use App\Models\ModelsReservation;
    // use Illuminate\Support\Facades\Auth;

class reservation extends Controller
{
    //

    // public function RateHere(Request $request, $reservationId) {
    //     $reservation = ModelsReservation::findOrFail($reservationId);
    
        
    //     // $trajetId = $reservation->trajet_id;
    
    //     $reservations = ModelsReservation::all(); 
    
    //     return view('binary.rating', [
    //         'reservation' => $reservation,
    //         'reservations' => $reservations,
    //     ]);
    // }
    
    

    public function store(Request $request)
    {
        // Create a new reservation instance
        $reservation = new ModelsReservation();
    
        // Assign values from the request to the reservation object
        $reservation->user_id = $request->user_id;
        $reservation->trajet_id = $request->trajet_id;
    
        $reservation->save();
        // dd($reservation);
        // Optionally, you can redirect the user after successful storage
        return redirect()->route('binary.ticket');
    }
    // public function reserve(Request $request)
    // {
    //     // dd($user);
    //     // $trajetId = $request->input('trajet_id');
    //     // $departure = $request->input('departure');
    //     // $destenation = $request->input('destenation');
    //     // $driver_id = $request->input('driver_id');
    //     // $license_number = $request->input('license_number');
    //     // $car_model = $request->input('car_model');
    //     // $passenger_id = $user->id;	
    
    //     $reservation = new ModelsReservation();
    //     // $user = User::find(Auth::id()); 

        
    //     // dd($trajetId, $departure, $destenation, $driver_id, $license_number, $car_model, $passenger_id);
    //     // $reservation->trajet_id = $trajetId;
    //     // $reservation->departure_city_id = $departure;
    //     // $reservation->destination_city_id = $destenation;
    //     // $reservation->driver_id = $driver_id;
    //     // $reservation->taxi_id = 1;
    //     // $reservation->car_type = $car_model;
    //     // $reservation->passenger_id = $passenger_id;
    
    //     $reservation->create([
    //     // 'departure_city_id' => $departure,
    //     // 'destination_city_id' => $destenation,
    //     // 'driver_id' => $driver_id,
    //     // 'taxi_id' => 1,
    //     // 'car_type' => $car_model,
    //     'user_id' => Auth::id(),
    // ]);
    
    //     return redirect()->back()->with('success', 'Trajet reserved successfully!');
    // }
        // public function reservationsComplet(Request $request) {
        //     $reservations = ModelsReservation::selectRaw('departure_city_id, destination_city_id, driver_id, COUNT(*) as num_reservations')
        //         ->groupBy('departure_city_id', 'destination_city_id' , 'driver_id')
        //         ->get();
        //         dd($reservations);

        //     return view('binary.search', compact('reservations'));
        // }

  
    
    // public function ticketOfReservation(Request $request)
    // {
    //     $userId = Auth::id();    
    //     $reservations = ModelsReservation::select(
    //         'reserv.id',
    //         'reserv.created_at',

    //         'departure_city.name as departure_city_name',
    //         'destination_city.name as destination_city_name',
    //         'driver.name as driver_name',
    //         'passenger.name as passenger_name'
    //     )
    //     ->join('cities_models as departure_city', 'departure_city.id', '=', 'reserv.departure_city_id')
    //     ->join('cities_models as destination_city', 'destination_city.id', '=', 'reserv.destination_city_id')
    //     ->join('users as driver', 'driver.id', '=', 'reserv.driver_id')
    //     ->join('users as passenger', 'reserv.user_id', '=', 'passenger.id')
    //     ->where('reserv.user_id', $userId) 
    //     ->get();
    
    //     dd($reservations);
    
    //     return view('binary.tickets', ['reservations' => $reservations]);
    // }
    public function ticketOfReservation(Request $request)
{
    $userId = Auth::id();

    // $reservations = ModelsReservation::select(
    //         'cities_departure.name as departure',
    //         'cities_destination.name as destination',
    //         'users.name as driver',
    //         'users.id as driver_id',
    //         'reserv.created_at',
    //         'reserv.id'

    //     )
    //     ->join('trajet', 'reserv.trajet_id', '=', 'trajet.id')
    //     ->join('cities_models as cities_departure', 'trajet.departure_city_id', '=', 'cities_departure.id')
    //     ->join('cities_models as cities_destination', 'trajet.destination_city_id', '=', 'cities_destination.id')
    //     ->join('users', 'trajet.driver_id', '=', 'users.id')
    //     ->get();
    $reservations = ModelsReservation::select(
        'cities_departure.name as departure',
        'cities_destination.name as destination',
        'users.name as driver',
        'users.id as driver_id',
        'reserv.created_at',
        'reserv.id'
    )
    ->join('trajet', 'reserv.trajet_id', '=', 'trajet.id')
    ->join('cities_models as cities_departure', 'trajet.departure_city_id', '=', 'cities_departure.id')
    ->join('cities_models as cities_destination', 'trajet.destination_city_id', '=', 'cities_destination.id')
    ->join('users', 'trajet.driver_id', '=', 'users.id')
    ->get();
    



    // dd($reservations);

    return view('binary.tickets', ['reservations' => $reservations]);
}

// public function TicketForRating(Request $request)
// {
//     $userId = Auth::id();

   
//     $reservations = ModelsReservation::select(
//         'cities_departure.name as departure',
//         'cities_destination.name as destination',
//         'users.name as driver',
//         'users.id as driver_id',
//         'reserv.created_at',
//         'reserv.id'
//     )
//     ->join('trajet', 'reserv.trajet_id', '=', 'trajet.id')
//     ->join('cities_models as cities_departure', 'trajet.departure_city_id', '=', 'cities_departure.id')
//     ->join('cities_models as cities_destination', 'trajet.destination_city_id', '=', 'cities_destination.id')
//     ->join('users', 'trajet.driver_id', '=', 'users.id')
//     ->get();
    

//     return view('binary.rating', ['reservations' => $reservations]);
// }

public function showRatingForm(Request $request ,$reservationId) {
    // dd($request);
    $reservation = ModelsReservation::findOrFail($reservationId);
    return view('binary.rating', ['reservation' => $reservation , 'request' => $request]);
}

public function add_rating(Request $request) {
    // dd($request);
    // Validate the incoming request data
    // $request->validate([
    //     'reservation_id' => 'required|exists:reservations,id',
    //     'rating' => 'required|numeric|min:1|max:5', 
    // ]);
  
    $userId = Auth()->id();
    Rating::create([
        'user_id' => $userId,
        'driver_id' => $request->driver_id,
        'rating' => $request->rating,
    ]);
    
    

    // Redirect to the success page
    return redirect()->route('binary.ticket');
}

// public function countReservationsByTrajetId()
// {
//     $reservationsCount = ModelsReservation::select('trajet_id')
//         ->selectRaw('COUNT(trajet_id) as reservations_count')
//         ->groupBy('trajet_id')
//         ->get();

//     dd($reservationsCount);

//     return view('binary.tickets', ['reservationsCount' => $reservationsCount]);
// }
    
    
    
}
