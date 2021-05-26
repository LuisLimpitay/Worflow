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
            'date' => '2021-06-03',
            'time' => '09:00',
            'stock' => 30,

            'course_id' => 1,
            'place_id' => 1,


        ]);
        Dictation::create([
            'date' => '2021-06-10',
            'time' => '09:00',
            'stock' => 30,

            'course_id' => 1,
            'place_id' => 2,


        ]);
        Dictation::create([
            'date' => '2021-06-17',
            'time' => '09:00',
            'stock' => '25',

            'course_id' => 1,
            'place_id' => 2,


        ]);

        Dictation::create([
            'date' => '2021-06-24',
            'time' => '09:00',
            'stock' => '25',

            'course_id' => 1,
            'place_id' => 1,

        ]);
    }
}
