<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Driver;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\driver>
 */

 
class DriverFactory extends Factory
{
    protected $model = Driver::class;

    public function definition()
    {
        $user = User::factory()->create();
        
        // Assuming 'web' is the name of the guard
        $role = Role::findByName('chauffeur', 'web');
        $user->assignRole($role);

        $faker = \Faker\Factory::create();

        // Generate a random vehicle brand
        $vehicleBrand = $faker->randomElement(['Dacia', 'Meridic', 'Pigo']);

        // Generate a random license plate
        $licensePlate = strtoupper($faker->lexify('??####'));

        return [
            'user_id' => $user->id,
            'car_model' => $vehicleBrand,
            'license_number' => $licensePlate,
        ];
    }
}