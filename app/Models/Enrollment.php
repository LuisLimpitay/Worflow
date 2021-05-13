<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\User;
use App\Models\Dictation;
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
        
    ];
    protected $table = 'enrollments';

    //Relacion UNO A UNO INVERSA
    public function dictations(){
        return $this->belongsTo(Dictation::class, "dictation_id" , "id");

    }
   

    


}
