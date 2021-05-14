<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\User;
use App\Models\Dictation;
use App\Models\payment as ModelsPayment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [

        'quantity',
        'status',
        'payment_method',

        'dictation_id',
        'user_id',

        
    ];

    protected $table = 'enrollments';

    //Relacion A UNO INVERSA
    public function dictations(){
        return $this->belongsTo(Dictation::class, "dictation_id" , "id");

    }

    //Relacion A UNO INVERSA
    public function users(){
        return $this->belongsTo(User::class, "user_id" , "id");

    }

    //Relacion A UNO INVERSA
    public function payments(){
        return $this->belongsTo(Payment::class, "payment_id" , "id");

    }
   

}
