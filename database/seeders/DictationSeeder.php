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
        Dictation::create([
            'date' => '2021-07-15',
            'time' => '09:00',
            'stock' => 30,
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 2,


        ]);
        Dictation::create([
            'date' => '2021-07-20',
            'time' => '09:00',
            'stock' => 25,
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 1,


        ]);

        Dictation::create([
            'date' => '2021-07-22',
            'time' => '09:00',
            'stock' => 30,
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 2,


        ]);
        Dictation::create([
            'date' => '2021-07-27',
            'time' => '09:00',
            'stock' => 25,
            'status' => 'activo',

            'course_id' => 1,
            'place_id' => 1,


        ]);
        /* $dictations = Dictation::factory(2)->create();
        foreach($dictations as $dictation){
            $dictation->users()->attach([4,5,6]);
        } */
 /*
        
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

*/
    }
}

