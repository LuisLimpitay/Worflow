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
        $payment_method = $request->get('payment_method');
        if($payment_method == 'tarjeta')
            $status = 'aprobado';
            elseif($payment_method == 'transferencia'){
                $status = 'aprobado';
            }
                else
                $status = 'pendiente';

        $fecha= Carbon::now();
    
        auth()->user()->dictations()->attach($dictation,
            [
                'quantity' => '1',
                'ammount' => $dictation->courses->price,
                'payment_method' => $payment_method,
                'status' => $status,
                'user_id' => auth()->id(),
                'created_at' => $fecha
            ]);
           
        $stock = $dictation->stock;
        $status = $dictation->status;

        $affected = DB::table('dictations')
                            ->where('id', $dictation->id)
                            ->update(['stock' => $dictation->stock - 1]);

        if($stock == 0)
                $status = 'completo';   


                            echo"Inscripto"; 
        return redirect()->route('courses.index');

        
        
    }
}
