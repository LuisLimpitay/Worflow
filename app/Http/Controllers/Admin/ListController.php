<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        /* $enrollments = DB::table('enrollments')
        ->join('dictations', 'enrollments.dictation_id', '=', 'dictations.id' )
        ->join('users', 'enrollments.user_id', '=', 'users.id' )
        ->select('dictation_id as Id_Dictado', 'dictations.date as Fecha_Dictado', 
            DB::raw('GROUP_CONCAT(users.name ) as Nombre_Clientes'), 
            DB::raw('count(user_id) as TotalInscriptos'))
        
        ->groupBy('dictation_id', 'dictations.date')
        ->get();
        return $enrollments; */
        //return view('admin.planillas.index', compact('enrollments'));

        //2 consulta pasarle el id del dictado y los users del mismo

        $dictations = Dictation::with('users')->get();

        return view('admin.planillas.index', compact('dictations'));
        
    }

    public function show(Dictation $dictation){
        
        $dictations = Dictation::find($dictation->id)->get();
        //dd($dictations);
        return view('admin.planillas.details', compact('dictations'));
    }


}
