<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index (){

        $customers = User::where('level', 2)->get();
        return view ('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        $customers = User::all();
        return view ('admin.customers.create', compact('customers'));
    }


    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|numeric|unique:users',
            'expire_license' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password'

        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $customers = User::create($input);
        return redirect()->route('admin.customers.index', $customers)
                            ->with('info', 'cliente creado');
    }

    // ************************************************************************

    public function edit(User $customer)
    {
        return view ('admin.customers.edit', compact('customer'));
    }


    public function update(Request $request, User $customer)
    {
        //return $request->all();
        $request->validate([
            'name' => '',
            'last_name' => '',
            //'phone' => '',
            //'email' => 'required|email|users,email,'.$customer->id,
            //'password' => 'required|same:confirm-password'

        ]);
        $input = $request->all();

        /*if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = Arr::except($input,['password']);
        }*/
        $customer->update($input);
        return redirect()->route('admin.customers.index')
                            ->with('info', 'cliente actualizado');
    }


    public function destroy(User $customer)
    {
            //dd($customer);
            $customer->delete();
            return redirect()->route('admin.customers.index', compact('customer'))
                            ->with('info', 'Cliente eliminado');
    }
}
