<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index()
    {
        $misinscripciones = Enrollment::where('user_id', auth()->user()->id)->get();
        //dump($inscrito);
        return view('courses.misInscripciones', compact ('misinscripciones')) ;
    }
   
}
