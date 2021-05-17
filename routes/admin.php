<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DictationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('admin.index');


Route::resource('clientes', AdminCustomerController::class)->names('admin.customers');

Route::resource('dictations', DictationController::class)->names('admin.dictations');

Route::resource('courses', CourseController::class)->names('admin.courses');

Route::resource('places', PlaceController::class)->names('admin.places');

Route::resource('teachers', TeacherController::class)->names('admin.teachers');



Route::resource('inscriptos',EnrollmentController::class)->names('admin.enrollments');



