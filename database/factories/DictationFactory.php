<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\Place;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class DictationFactory extends Factory
{

    protected $model = Dictation::class;

    public function definition()
    {
        /* $date = Carbon::today()->addDays(rand(1,31));
        return [
     
            'date' => $date,
            'time' => $this->faker->randomElement(['09:00:00']),
            'stock' => $this->faker->randomElement(['25','30','20']),

            'course_id' => Course::all()->random()->id,
            'place_id' => $this->faker->randomElement(['1','2']),
        ]; */
    }
}
