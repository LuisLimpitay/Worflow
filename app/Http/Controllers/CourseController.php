<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\DictationUser;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\MagicConst\Dir;

class CourseController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    /****************************************************************************
     Este metodo me trae los detalles y las fechas de Dictado con sus CUPOS
    -----------------------------------------------------------------------------*/
    public function show(Course $course)
    {


        if (Auth::check()) {
            $dictado = auth()->user()->dictations;
            $ids = $dictado->pluck('id');

            $dictations = Dictation::with('courses')
                ->where('stock', '>', '0')
                ->whereNotIn('id', $ids)
                ->orderby('date', 'DESC')
                ->paginate(4);
        } else {
            $course_id= $course->id;
            $dictations = Dictation::with('courses')
                ->where('stock' ,'>', 0)
                ->where('course_id', $course_id )
                ->orderby('date', 'DESC')
                ->paginate(4);
            //dd($dictations);

        }
        return view('courses.show', compact('course', 'dictations'));
    }
    ///************************************************************************* */
    /*ESTO ME MUESTRA TODOS LOS DICTADOS DE UN CURSO SIN FILTROS
        $dictations = $course->dictations;*/

    public function checkout(Dictation $dictation)
    {
        $dictations = Dictation::all();
        return view('courses.checkout', compact('dictation'));
    }


    // retorna vista de QAs
    public function qa()
    {
        return view('qa');
    }

    // retorna form de contacto
    public function contact()
    {
        return view('contact');
    }
}
