<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }


    public function index(){

        $courses = Course::all();
        return view ('courses.index', compact('courses'));
    }

    //**************************************************************************** */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
    ///************************************************************************* */
    ///

    //ESTA FUNCION LO QUE ME HACE ES MOSTRARME TODOS LOS DICTADOS DISPONIBLES CON SUS CUPOS
    public function dictados(Course $course)
    {
        $dictations = Dictation::with('courses')->orderby('date', 'DESC')->get();

        return view('courses.dictationCurso', compact('dictations'));

    }

    public function checkout(Dictation $dictation)
    {
        $userName = auth()->user()->name;
        $usersLastName = auth()->user()->last_name;
        $enrollment = Enrollment::pluck('payment_method', 'id');
        dump($enrollment);

        //dd($userss);
        $dictations = Dictation::all();
        //ACA DEBO HACER LA CONSULTA PARA QUE SI ES VALIDA LA TARJETA PASE Y VAYA A LA VISTA O SINO QUE VAYA Y EL ESTADO SEA PENDIENTE
        return view('courses.checkout', compact('dictation', 'userName', 'usersLastName', 'enrollment'));
    }


    public function qa()
    {
        return view('qa');
    }

    public function contact()
    {
        return view('contact');
    }


}
