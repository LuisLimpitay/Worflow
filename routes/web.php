<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PaymentController;
use Carbon\Carbon;

Route::get('/pruebas', function () {

    $date = auth()->user()->level;
    dump($date);
});

Route::get('/', [HomeController::class, 'home'])->name('home');


// ******************  CURSOS  **************************************************
Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');


// *********************  DETALLES del CURSO  *************************************
Route::get('curso/{course}', [CourseController:: class, 'show'])->name('courses.show');


//*****************************  FECHAS DE DICTADO esto deberia swer un POST  ***************
Route::get('dictado/{course}', [CourseController:: class, 'dictados'])->name('courses.dictationCurso');


// *********************************   CHECKOUT -> me genera la orden
Route::get('checkout/{dictation}', [CourseController:: class, 'checkout'])->name('courses.checkout');


//******************************  PAYMENT MERCADO PAGO  ************************************->
Route::post('payment', [PaymentController:: class, 'payment'])->name('courses.payment');



// ****************************  QA  ******************************************
Route::get('preguntas-frecuentes', [CourseController::class, 'qa'])->name('qa');


//  ************************  CONTACTO  *****************************************
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
//  ******* ********* ********** ****** ********* ********* ********** ********** **********




Route::get('/misinscripciones', [UserController::class, 'inscripto']);


Route::get('inscriptos', [UserController::class, 'inscriptos'])->name('user.inscriptos');

