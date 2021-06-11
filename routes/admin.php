<?php

use App\Http\Controllers\Admin\DictationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ListController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;
/* $pdf = App::make('customers.enrollments');
$pdf->loadView('welcome');
return $pdf->stream(); */

Route::get('/', [HomeController::class, 'index'])->name('admin.index')->middleware('level');


Route::resource('customers', CustomerController::class)->middleware('level')->names('admin.customers');
Route::resource('planillas' ,ListController::class)->middleware('level')->names('admin.planillas');
//mando orders como parametros,
Route::resource('orders', OrderController::class)->parameters(['orders' => 'pivot'])->middleware('level')->names('admin.orders');

Route::get('planillas/detalles/{dictation}', [ListController::class, 'show'])->name('admin.planillas.details');


Route::resource('courses', CourseController::class)->middleware('level')->names('admin.courses');
Route::resource('dictations', DictationController::class)->middleware('level')->names('admin.dictations');
Route::resource('places', PlaceController::class)->middleware('level')->names('admin.places');
Route::resource('teachers', TeacherController::class)->middleware('level')->names('admin.teachers');







//Route::get('/changeStatus', [OrderController::class, 'changeStatus'])->name('changeStatus');







