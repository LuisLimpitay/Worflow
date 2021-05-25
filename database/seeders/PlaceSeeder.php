<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([

            'city' => 'Caleta Olivia',
            'address_street' => 'Moreno',
            'address_number' => '1290',

        ]);
        Place::create([

            'city' => 'Pico Truncado',
            'address_street' => 'Alvear',
            'address_number' => '1390',
 
        ]);

        Place::create([

            'city' => 'Las Heras',
            'address_street' => 'Belgrano',
            'address_number' => '2390',
 
        ]);
    }
}
