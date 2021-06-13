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
            'name' => 'Sindicato de Petroleros Jerarquico',
            'city' => 'Caleta Olivia',
            'address_street' => 'Moreno',
            'address_number' => '1290',

        ]);

        Place::create([
            'name' => 'Centro Integrador Comunitario',
            'city' => 'Las Heras',
            'address_street' => 'Belgrano',
            'address_number' => '2390',

        ]);
    }
}
