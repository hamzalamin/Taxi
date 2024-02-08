<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    private static $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->count(10)->create();

    }
}
