<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use App\Models\DictationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class SheetController extends Controller
{
    public function index()
    {
        $dictations = Dictation::published()->get();
        return view('admin.sheets.index', compact('dictations'));
    }
    
    public function show(Dictation $dictation)
    {
        dd($dictation);
        $pivots = DictationUser::where('dictation_id',$dictation->id)->get();
        //dd($pivot);
        return view('admin.dictations.show', compact('dictation', 'pivots'));
    }

    public function destroy(Dictation $dictation)
    {
            dd($dictation);
            $dictation->delete();
            //luego de hacer esto va a mi modelo y suma uno al dictation
            return redirect()->route('admin.dictations.index')
                                ->with('info', 'Dictado eliminado con Exito !');
    }

    public function planillapdf(Dictation $dictation)
        {
            //$detalles = DictationUser::where('id', $pivot->id)->get();
            $pivots = DictationUser::where('dictation_id',$dictation->id)->get();
            //dd($pivot);
            //return view('admin.dictations.show', compact('dictation', 'pivots'));
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('admin.planilla', compact('pivots', 'dictation'));
            return $pdf->stream();
        }

}
