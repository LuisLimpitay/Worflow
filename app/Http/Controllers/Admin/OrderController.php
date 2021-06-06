<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DictationUser;
use App\Models\Dictation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
        
        public function index (Dictation $dictations){
            //$enrollments = Enrollment::with('dictations', 'users')->orderBy('id')->get();
            $users = auth()->user();
            $pivots = DictationUser::with('dictations', 'users')->get();
            //dd($enrollments);

            return view ('admin.orders.index', compact('pivots', 'users'));
        }
        // $enrollments = Enrollment::all();
        //return view ('admin.orders.index', compact('enrollments'));




        public function changeStatus(Request $request){
            
            return "hola";
        }

        public function destroy(DictationUser $pivot){
            dd($pivot);
            
            $id = DictationUser::findOrFail($pivot);
            dd($id);
            //auth()->user()->dictations()->attach($dictation,
            auth()->user()->dictations()->detach(4);
            echo "listo";
        }
    
}
