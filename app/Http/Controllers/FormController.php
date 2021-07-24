<?php

namespace App\Http\Controllers;

use App\Models\Dictation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function store(Request $request, Dictation $dictation)
    {
        $stock = $dictation->stock;
        $status1 = $dictation->status;

        //ACA VOY RESTANDO EL STOCK
        $affected = DB::table('dictations')
                            ->where('id', $dictation->id)
                            ->update(['stock' => $dictation->stock - 1]);
        if($stock == 1)
            $status1 = 'completo';
        //ACA ACTUALIZO EL ESTADO
        $affected2 = DB::table('dictations')
                            ->where('id', $dictation->id)
                            ->update(['status' => $status1]);

        return redirect()->route('home')->with('info', 'inscripcion exitosa');

    }

}
