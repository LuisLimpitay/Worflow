<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use Illuminate\Support\Collection;
use App\Models\DictationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {


        $dictations = Dictation::all();
        return view('admin.planillas.index', compact( 'dictations'));
    }

    public function show(Dictation $dictation, DictationUser $pivot){

        // cambias por q uses $orden
        return view('admin.planillas.show', compact('dictation','pivot'));
    }


}
