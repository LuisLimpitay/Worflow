<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DictationUser;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
        
        public function index (){
            //$enrollments = Enrollment::with('dictations', 'users')->orderBy('id')->get();
            $enrollments = DictationUser::with('dictations1')->get();

            //dd($enrollments);
            return view ('admin.orders.index', compact('enrollments'));
        }
        
        // $enrollments = Enrollment::all();
        //return view ('admin.orders.index', compact('enrollments'));
    
}
