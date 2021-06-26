<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Caleta Olivia'
        ]);
        City::create([
            'name' => 'Las Heras'
        ]);
        City::create([
            'name' => 'Pico Truncado'
        ]);
        City::create([
            'name' => 'Cañadon Seco'
        ]);
    }
}
