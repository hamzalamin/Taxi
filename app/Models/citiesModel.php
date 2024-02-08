<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class citiesModel extends Model
{
    use HasFactory;

    // Define the relationship with Trajet model
    public function trajets()
    {
        return $this->hasMany(Trajet::class, 'departure_city_id');
    }
}
