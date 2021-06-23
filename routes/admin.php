<?php

use App\Http\Controllers\Admin\DictationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SheetController;
use Illuminate\Support\Facades\Route;
/* $pdf = App::make('customers.enrollments');
$pdf->loadView('welcome');
return $pdf->stream(); */


Route::get('/', [HomeController::class, 'index'])->middleware('level')->name('admin.index');


Route::resource('customers', CustomerController::class)->middleware('level')->names('admin.customers');
Route::resource('planillas' ,SheetController::class)->middleware('level')->names('admin.sheets');

//mando orders como parametros,
Route::resource('orders', OrderController::class)->parameters(['orders' => 'pivot'])->middleware('level')->names('admin.orders');

Route::resource('courses', CourseController::class)->middleware('level')->names('admin.courses');
Route::resource('dictations', DictationController::class)->middleware('level')->names('admin.dictations');
Route::resource('places', PlaceController::class)->middleware('level')->names('admin.places');
Route::resource('teachers', TeacherController::class)->middleware('level')->names('admin.teachers');





//Route::get('/changeStatus', [OrderController::class, 'changeStatus'])->name('changeStatus');







