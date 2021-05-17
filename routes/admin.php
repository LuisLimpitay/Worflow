<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DictationController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('admin.index');


Route::resource('clientes', CustomerController::class)->names('admin.customers');

Route::resource('dictados', DictationController::class)->names('admin.dictations');

Route::resource('curso', CourseController::class)->names('admin.courses');

Route::resource('lugares', PlaceController::class)->names('admin.places');

Route::resource('instructor', TeacherController::class)->names('admin.teachers');



Route::resource('inscriptos',EnrollmentController::class)->names('admin.enrollments');



