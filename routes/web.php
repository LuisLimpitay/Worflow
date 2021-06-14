<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Enrollments;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PruebasController;
use App\Mail\ContactanosMailable;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

Route::get('/pruebas', function () {

    /* $date = auth()->user()->level;
    dump($date);
    $inscrito = Enrollment::where('user_id', auth()->user()->id)->get();
    dump($inscrito);*/
    /* $fecha= Carbon::now();
    dd($fecha); */
    /* $a = auth()->user()->dictations(1);
    dd($a); */
});



Route::get('/', [HomeController::class, 'home'])->name('home');



// ****************************  QA  ******************************************
Route::get('preguntas-frecuentes', [CourseController::class, 'qa'])->name('qa');

//--------------------------------------------------------------------------------
// -----------------   Controladores CourseController     -------------------------
//--------------------------------------------------------------------------------
// ***********************  CURSOS  **************************************************
Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');


// ***********************  DETALLES del CURSO  *************************************
Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');


// ***********************  CHECKOUT -> me genera la orden ********************************************
Route::get('checkout/{dictation}', [CourseController::class, 'checkout'])->name('courses.checkout');
//--------------------------------------------------------------------------------
// -----------------  FIN Controladores CourseController     -------------------------
//--------------------------------------------------------------------------------
//******************************  me inserta en mio DB   ************************************->
//Route::post('payment/{dictation}', [PaymentController:: class, 'payment'])->name('courses.payment');



//******************************  me inserta en mio DB   ************************************->
Route::post('form/{dictation}', [FormController::class, 'store'])->name('form');





//  ************************  CONTACTO  *****************************************
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
//  ******* ********* ********** ****** ********* ********* ********** ********** **********









//  ************************  MIS INSCRIPCIONES  *****************************************
Route::get('/mis-inscripciones/{user}', [EnrollmentController::class, 'index'])->middleware('auth')->name('customers.enrollments');

Route::get('descargas/{user}', [EnrollmentController::class, 'pdf'])->name('inscripcion');
//  ************************  CREAR INSCRIPCION  *****************************************
//Route::resource('xxx', PruebasController::class)->names('enrollments');
