<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) 
        {
            $prueba = $user->name;
            dump($prueba);
        }
        
        /* $users = User::where('level', 2)->get();
        return view('admin.customers.index', compact('users')); */
    }
}   
