<?php

namespace Database\Seeders;

use App\Models\Izvodjenje;
use App\Models\Pozoriste;
use App\Models\User;
use Database\Factories\PredstavaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pozoriste::factory(5)->create();
        PredstavaFactory::factory(10)->create();
        Izvodjenje::factory(8)->create();

        User::factory(10)->create();
    }
}
