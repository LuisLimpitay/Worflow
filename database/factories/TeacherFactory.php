<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    
    protected $model = Teacher::class;

    public function definition()
    {
        return [

            'name' => 'Florindo',
            'last_name' => 'Mesa',
            'about' => 'Capacitador de flota liviana durante mas de 5 años, certificado por el National Safety Council (Consejo Nacional de Seguridad).',
          
        ];
    }
}
