<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DictationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dictation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
     
            'date' => $this->faker->randomElement(['2021-05-10','2021-05-30','2021-05-17','2021-05-24']),
            'time' => $this->faker->randomElement(['09:00:00']),
            'stock' => $this->faker->randomElement(['25','30','20', '35']),

            'course_id' => Course::all()->random()->id,
            'place_id' => Place::all()->random()->id,
            'user_id' => User::all()->random()->id,


        ];
    }
}
