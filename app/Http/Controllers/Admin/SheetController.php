<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use App\Models\DictationUser;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function index()
    {
        $dictado = auth()->user()->dictations;
        dd($dictado);
        $dictations = Dictation::all();
        return view('admin.sheets.index', compact( 'dictations'));
    }

    public function edit(Dictation $dictation){
        return $dictation;

    }

    public function show(Dictation $dictation){

        $planilla = DictationUser::find( $dictation);
        dd($planilla);

        return $dictation;

    }

}
