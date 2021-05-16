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
     
            'date' => $this->faker->unique()->date($format = 'Y-m-d', $min = '2021-05-5'),
            'time' => $this->faker->randomElement(['09:00:00']),
            'stock' => $this->faker->randomElement(['25','30','20', '35']),

            'course_id' => Course::all()->random()->id,
            'place_id' => Place::all()->random()->id,

        ];
    }
}
