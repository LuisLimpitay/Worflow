<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Dictation;
use App\Models\DictationUser;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pivots= DictationUser::all();
        $customers = User::where('level', 2)->get();
        $dictations = Dictation::all();
        return view('admin.index', compact('pivots', 'customers','dictations'));
    }
}
