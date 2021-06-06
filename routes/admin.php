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

Route::get('/', [HomeController::class, 'index'])->name('admin.index');


Route::resource('cusotmers', CustomerController::class)->names('admin.customers');
Route::resource('planillas' ,ListController::class)->names('admin.planillas');
Route::resource('ordenes', OrderController::class)->names('admin.orders');

Route::get('planillas/detalles/{dictation}', [ListController::class, 'show'])->name('admin.planillas.details');



Route::resource('courses', CourseController::class)->names('admin.courses');
Route::resource('dictations', DictationController::class)->names('admin.dictations');
Route::resource('places', PlaceController::class)->names('admin.places');
Route::resource('teachers', TeacherController::class)->names('admin.teachers');







//Route::get('/changeStatus', [OrderController::class, 'changeStatus'])->name('changeStatus');







