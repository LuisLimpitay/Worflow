<?php

namespace App\Http\Controllers;

use App\Models\Dictation;
use App\Models\DictationUser;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.       
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {

        $users = User::find($user->id);
        //dump($users);
        return view('customers.enrollments', compact('users'));
    }
    //$misinscripciones = Enrollment::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
    //dump($inscrito);
    //return view('customers.enrollments', compact ('misinscripciones')) ;
    public function pdf(User $user)
    {
        $users = User::find($user->id);
         
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('inscripcion', compact('users'));
        return $pdf->stream();
    }
    
}
