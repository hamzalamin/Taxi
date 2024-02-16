<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_number',
        'user_id',
        'car_model',
        'profile',
    ];
    protected $table = 'drivers';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
