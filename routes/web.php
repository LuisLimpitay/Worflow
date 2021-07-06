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
use App\Http\Controllers\WebhookController;
use GuzzleHttp\Middleware;

Route::get('/pruebas', function () {
    /* $a = auth()->user()->dictations(1);
    dd($a); */
});

//********************  me NOTIFICA  *******************************************************
Route::post('webhooks', [WebhookController::class, ])->name('courses.payment');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');
Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('orden/{dictation}/pagos', [CourseController::class, 'checkout'])->middleware('auth')->name('courses.checkout');
Route::get('orden/{dictation}/pay', [CourseController::class, 'pay'])->name('courses.pay');
Route::get('pago/{dictation}/pending', [CourseController::class, 'pending'])->name('courses.pending');



//******************************  me inserta en mio DB   ************************************->
Route::post('form/{dictation}', [FormController::class, 'store'])->name('form');

Route::get('preguntas-frecuentes', [CourseController::class, 'qa'])->name('qa');
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');




//  ************************  MIS INSCRIPCIONES  *****************************************
Route::get('/mis-inscripciones/{user}', [EnrollmentController::class, 'index'])->middleware('auth')->name('customers.enrollments');
Route::get('descargas/{user}', [EnrollmentController::class, 'pdf'])->name('inscripcion');

