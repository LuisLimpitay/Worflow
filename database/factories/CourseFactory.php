<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = 'Manejo Defensivo';

        return [

            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => 'El curso consiste en reforzar y refrescar conceptos sobre la conduccion segura. Tras la aprobación del mismo se otorgara el Carnet de Manejo Defensivo necesario para el acceso a los yacimientos entre otros requerimientos.',
            
            'content' => 'En el módulo teórico reflexionamos sobre los hábitos, actitud y destrezas necesarias para un correcto manejo defensivo en el área laboral. Se analizan los comportamientos del peatón y conductor, las metodologías del tránsito y las posibles reacciones ante situaciones de riesgo. Mientras que en el módulo práctico establecemos y evaluamos en los participantes buenos hábitos de conducción, con la misión de instruir en forma práctica la conducción del vehículo in situ, adquiriendo habilidades y conocimientos necesarios para ser un conductor defensivo, a través de los cuales se reconocen los peligros habituales que surgen cuando conducimos y cómo reaccionar para evitar accidentes.',
            
            'mode' => 'Presencial',
            'price' => '7000',

            'teacher_id' => Teacher::all()->random()->id,

        ];
    }
}
