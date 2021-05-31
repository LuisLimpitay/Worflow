<?php

namespace Database\Seeders;

use App\Models\Dictation;
use Illuminate\Database\Seeder;

class DictationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $dictations = Dictation::factory(5)->create();
        foreach($dictations as $dictation){
            $dictation->users()->attach([
                rand(2,5),
                rand(5,6),
                rand(6,8)
            ]);
        } */

        Dictation::create([
            'date' => '2021-06-03',
            'time' => '09:00',
            'stock' => 30,
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 1,


        ]);
        Dictation::create([
            'date' => '2021-06-10',
            'time' => '09:00',
            'stock' => 1,
            'status' => 'completo',

            'course_id' => 1,
            'place_id' => 2

        ]);
        Dictation::create([
            'date' => '2021-06-17',
            'time' => '09:00',
            'stock' => '25',
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 2

        ]);

        Dictation::create([
            'date' => '2021-06-24',
            'time' => '09:00',
            'stock' => '25',
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 1
        ]);
 

    }
}
