<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index (){
        
        $users = User::where('level', 2)->get();
        return view ('admin.customers.index', compact('users'));
    }
}
