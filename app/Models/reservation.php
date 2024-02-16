<?php
namespace App\Models;

use App\Models\Driver;
// use App\Models\Chauffeur;
use App\Models\CitiesModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reserv';

    protected $fillable = ['user_id', 'trajet_id'];

    // public function departureCity()
    // {
    //     return $this->belongsTo(CitiesModel::class, 'departure_city_id');
    // }
    
    // public function destinationCity()
    // {
    //     return $this->belongsTo(CitiesModel::class, 'destination_city_id');
    // }
}
