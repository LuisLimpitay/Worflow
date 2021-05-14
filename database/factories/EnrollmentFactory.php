<?php

namespace Database\Factories;

use App\Models\Dictation;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enrollment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'quantity' => '1',
            'status' => $this->faker->randomElement(['pagado', 'pendiente']),
            'payment_method' => $this->faker->randomElement(['debito', 'transferencia','efectivo']),
            
            'dictation_id' => Dictation::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'payment_id' => Payment::all()->random()->id,

        ];
    }
}
