<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'time_Of_Trajet',
        'destination_city_id',
        'departure_city_id',
        'TypeOfpayment',
        'driver_id',
    ];
    protected $table = 'trajet';

    public function departureCity()
    {
        return $this->belongsTo(citiesModel::class, 'departure_city_id');
    }

    public function destinationCity()
    {
        return $this->belongsTo(citiesModel::class, 'destination_city_id');
    }
}

