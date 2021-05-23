<?php

use App\Http\Controllers\Admin\DictationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\EnrollmentDictationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('admin.index');




Route::resource('clientes', AdminCustomerController::class)->names('admin.customers');

Route::resource('dictations', DictationController::class)->names('admin.dictations');

Route::resource('courses', CourseController::class)->names('admin.courses');

Route::resource('places', PlaceController::class)->names('admin.places');

Route::resource('teachers', TeacherController::class)->names('admin.teachers');




Route::resource('customers', CustomerController::class)->names('admin.customers');

Route::resource('planillas' ,EnrollmentDictationController::class)->names('admin.planillas');

Route::resource('orders', OrderController::class)->names('admin.orders');





