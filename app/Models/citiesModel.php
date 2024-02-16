<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitiesModel extends Model
{
    use HasFactory;

    protected $table = 'cities_models'; 

    public function trajets()
    {
        return $this->hasMany(Trajet::class, 'departure_city_id');
    }
}
