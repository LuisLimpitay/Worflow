<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollmentDictationController extends Controller
{

    public function index()
    {
        $enrollments = DB::table('enrollments')
        ->join('dictations', 'enrollments.dictation_id', '=', 'dictations.id' )
        ->join('users', 'enrollments.user_id', '=', 'users.id' )
        ->select('dictation_id as Id_Dictado', 'dictations.date as Fecha_Dictado', 
            DB::raw('GROUP_CONCAT(users.name ) as Nombre_Clientes'), 
            DB::raw('count(user_id) as TotalInscriptos'))
        
        ->groupBy('dictation_id', 'dictations.date')
        ->get();
        return $enrollments;
        //return view('admin.planillas.index', compact('enrollments'));
    }
    
}
