<?php
namespace App\Models;

use App\Models\Chauffeur;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Define a relationship with the Chauffeur model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chauffeur()
    {
        return $this->hasOne(Chauffeur::class);
    }
    public function driver()
{
    return $this->belongsTo(User::class, 'driver_id');
}
    public function isDriver()
    {
        return $this->chauffeur()->exists();
    }
}
