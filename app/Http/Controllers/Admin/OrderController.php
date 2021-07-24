<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DictationUser;
use App\Models\Dictation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $pivots = DictationUser::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('pivots'));
    }

    public function edit(DictationUser $pivot) {
        //
        $dictations = Dictation::pluck('date', 'id');
        return view('admin.orders.edit', compact('pivot', 'dictations'));
    }
    public function show(DictationUser $pivot){
        return view('admin.orders.show', compact('pivot'));
    }

    public function  update(Request $request, DictationUser $pivot){

        $pivot->update($request->all());
        return redirect()->route('admin.orders.index', compact('pivot'))
            ->with('info', 'Orden actualizada correctamente !');
    }

    public function destroy(DictationUser $pivot)
    {
        $pivot->delete();
        //AUMENTA EN UNO EL STOCK DEL DICTADO y vuelve
        return redirect()->route('admin.orders.index', compact('pivot'))
            ->with('info', 'Orden eliminada correctamente !');
    }


}
