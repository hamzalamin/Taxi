<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory;

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

