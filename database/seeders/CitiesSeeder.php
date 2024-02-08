<?php

namespace Database\Seeders;

use App\Models\citiesModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        citiesModel::factory()->count(50)->create();

    }
}
