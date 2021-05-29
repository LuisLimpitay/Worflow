<?php

namespace App\Http\Controllers;

use App\Models\Dictation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function payment(Request $request, Dictation $dictation)
    {
        dump($request);
        /* $a = auth()->user()->dictations()->attach($dictation,
            [
                'quantity' => '1',
                'ammount' => $dictation->courses->price,
                'payment_method' => 'efectivo',
                'status' => 'aprobado',
                'user_id' => auth()->id()
               
            ]);
            
        echo"Inscripto"; */
    }

    public function transaction(Dictation $dictation)
    {
        dd($dictation);
    }
    
}
