<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{

    public function run()
    {
        Place::create([
            'name' => 'Sindicato de Petroleros Jerarquico',

            'address_street' => 'Moreno',
            'address_number' => '1290',
            'city_id' => 1,

        ]);

        Place::create([
            'name' => 'Centro Integrador Comunitario',
            'address_street' => 'Belgrano',
            'address_number' => '2390',
            'city_id' => 1,

        ]);
    }
}
