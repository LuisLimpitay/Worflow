<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'address_street' => $this->faker->randomElement(['Juan B. Justo','Av. Libertador','San Martin']),
            'address_number' => '2100',
            'city' => $this->faker->unique()->cityPrefix

        ];
    }
}
