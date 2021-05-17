<?php

namespace App\Http\Controllers;

use App\Models\Dictation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function payment()
    {
        
        return "hOLA";
    }

    public function transaction(Dictation $dictation)
    {
        dd($dictation);
    }
    // ME INSCRIBE EN LA BASE DE DATOS CUANDO TENIA TABLA PIVOT
    public function enroll(Request $request, Dictation $dictation){
        auth()->user()->dictations()->attach($dictation,
            [
                'user_id' => auth()->id(),
                'quantity' => '1',
                'amount' => $dictation->courses->price,
                'payment_method' => 'Transferencia'
            ]);
        
        echo"Inscripto";
    }
}
