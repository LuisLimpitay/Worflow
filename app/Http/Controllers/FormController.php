<?php

namespace App\Http\Controllers;

use App\Models\Dictation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function store(Request $request, Dictation $dictation)
    {
        
        //acceder a un campo especifico return $request->get('payment_method');
        //return $request->get('payment_method');        
        //dump($request);
        $request->validate([
            'payment_method' => 'required'
        ]);
        
        $payment_method = $request->get('payment_method');
        if($payment_method == 'tarjeta')
            $status = 'aprobado';
            elseif($payment_method == 'transferencia'){
                $status = 'aprobado';
            }
                else
                $status = 'pendiente';

        $fecha= Carbon::now();
    
        //******************************************** */
        //------------------------------------------------ */
        auth()->user()->dictations()->attach($dictation,
            [
                'quantity' => '1',
                'ammount' => $dictation->courses->price,
                'payment_method' => $payment_method,
                'status' => $status,
                'user_id' => auth()->id()
            ]);
           
        $stock = $dictation->stock;
        $status1 = $dictation->status;


        $affected = DB::table('dictations')
                            ->where('id', $dictation->id)
                            ->update(['stock' => $dictation->stock - 1]);
                                
        if($stock == 1)
            $status1 = 'completo';
        $affected2 = DB::table('dictations')
                            ->where('id', $dictation->id)
                            ->update(['status' => $status1]);
            //dd($status1);

            //'status' => $status1
        
        return redirect()->route('home')->with('info', 'inscripcion exitosa');

        
        
    }

    
}
