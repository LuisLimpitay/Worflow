<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' => 'Ruperto Carmona',
            'about' => 'Capacitador de flota liviana durante mas de 5 años avalado por la SFW',
            'email' => $this->faker->freeEmail(),
          
        ];
    }
}
