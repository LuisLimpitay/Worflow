<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enrollment::create([
            'quantity' => '1',
            'status' => 'pendiente',
            
            'dictation_id' => 1,
            'user_id' => 2,
            'payment_id' => Payment::all()->random()->id,

        ]);

        Enrollment::create([
            'quantity' => '1',
            'status' => 'pendiente',
            
            'dictation_id' => 2,
            'user_id' => 3,
            'payment_id' => Payment::all()->random()->id,

        ]);
        Enrollment::create([
            'quantity' => '1',
            'status' => 'pagado',
            
            'dictation_id' => 3,
            'user_id' => 4,
            'payment_id' => Payment::all()->random()->id,

        ]);
        Enrollment::create([
            'quantity' => '1',
            'status' => 'pendiente',
            
            'dictation_id' => 4,
            'user_id' => 5,
            'payment_id' => Payment::all()->random()->id,

        ]);
    }
}
