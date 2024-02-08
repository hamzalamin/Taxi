<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Driver;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call other seeders
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(chaufaur::class);

        // Populate driver table with users who have the role "driver"
       
    }
}
