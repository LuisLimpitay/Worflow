<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use App\Models\DictationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheetController extends Controller
{
    public function index()
    {
        $dictations = DB::table('dictation_user')
            ->select('quantity')
        ->join('dictations', 'dictation_user.dictation_id', '=', 'dictations.id' )
        ->join('users', 'dictation_user.user_id', '=', 'users.id' )
        ->select('dictation_id as Id_Dictado', 'dictations.date as Fecha_Dictado',
            DB::raw('GROUP_CONCAT(users.name ) as Nombre_Clientes'),
            DB::raw('count(user_id) as TotalInscriptos'))

        ->groupBy('dictation_id', 'dictations.date')
        ->get();
        return $dictations;
        //return view('admin.planillas.index', compact('enrollments'));

        //2 consulta pasarle el id del dictado y los users del mismo


        return view('admin.planillas.index', compact('dictations'));
    }

    public function edit(Dictation $dictation){
        return $dictation;

    }

    public function show(Dictation $dictation)
    {

        return view('admin.sheets.show', compact('dictation'));

    }


    public function destroy(Dictation $dictation)
    {
        dd($dictation);
        $dictation->delete();
        //luego de hacer esto va a mi modelo y suma uno al dictation
        return redirect()->route('admin.sheets.index')
            ->with('info', 'Dictado eliminado con Exito !');
    }

}
