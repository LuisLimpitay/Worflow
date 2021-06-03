<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Dictation;
use App\Models\DictationUser;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\MagicConst\Dir;

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


    /**************************************************************************** 
     Este metodo me trae los detalles y las fechas de Dictado con sus CUPOS
    -----------------------------------------------------------------------------*/
    public function show(Course $course, DictationUser $dicuser)
    {

        $users = auth()->user();
        //dd($id); 
        //aca deberia traer el ID del dictado al cual se inscribio el usuario
        
        /* $x = DictationUser::with('dictations', 'users' )
                            ->where('user_id', '=', 'id' )->get(); */
        
        $dictations = Dictation::with('courses', 'users' )
                                ->where('stock', '>', '0')
                                ->where('id', '<>', 1)
                                ->orderby('date', 'DESC')
                                ->get();  
        
        /*ESTO ME MUESTRA TODOS LOS DICTADOS DE UN CURSO SIN FILTROS
        $dictations = $course->dictations;*/
                  
        return view('courses.show', compact( 'course', 'dictations', 'users'));

    }
    ///************************************************************************* */
 
    
    public function checkout(Dictation $dictation)
    {
        /* $userName = auth()->user()->name;
        $usersLastName = auth()->user()->last_name; */
        $enrollment = Payment::pluck('name', 'id');
        //dump($enrollment);

        //dd($userss);
        $dictations = Dictation::all();
        //ACA DEBO HACER LA CONSULTA PARA QUE SI ES VALIDA LA TARJETA PASE Y VAYA A LA VISTA O SINO QUE VAYA Y EL ESTADO SEA PENDIENTE
        return view('courses.checkout', compact('dictation','enrollment'));
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
