<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Dictation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //EL ADMIN ES LEVEL 1
        $users = User::where('level', 2)->get();
        //dump($users);
        return view ('user.index', compact('users'));

    }
    // ESTE metodo me deberia traer
    public function inscriptos (){
        //$dictations = Dictation::all()->ORDERBY('date','DESC')->get();
        //$inscriptos = Enrollment::where('dictation_id', $dictations[0]->id)->get();
        $inscriptos = Enrollment::all();

        //dump($inscriptos);
        return view ('user.inscriptos', compact('inscriptos'));

    }
    //ACA DEBERIA USAR LA AUTENTICACION PARA SABERLOS DATOS DE ESE USER

    public function details (){
        $user = User::all();
    }

}
