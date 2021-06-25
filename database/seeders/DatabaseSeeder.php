<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\Enrollment;
use App\Models\Place;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teacher;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CitySeeder::class);

        $this->call(PlaceSeeder::class);
        Teacher::factory(1)->create();
        Course::factory(1)->create();
        //Dictation::factory(2)->create();

        $this->call(UserSeeder::class);
        $this->call(DictationSeeder::class);



    }
}
