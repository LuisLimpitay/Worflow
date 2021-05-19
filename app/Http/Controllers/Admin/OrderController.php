<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
        
        public function index (){
            //$enrollments = Enrollment::with('dictations', 'users')->orderBy('id')->get();
            $enrollments = Enrollment::all();
            return view ('admin.orders.index', compact('enrollments'));
        }
        
             
        // $enrollments = Enrollment::all();
        //return view ('admin.orders.index', compact('enrollments'));
    
}
