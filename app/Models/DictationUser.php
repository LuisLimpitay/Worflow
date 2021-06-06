<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dictation;

class DictationUser extends Model
{
    use HasFactory;
    

    protected $guarded = [
        'quantity',
        'ammount',
        'payment_method',
        'status',
        'dictation_id',
        'user_id',
        'created_at',
        'upadte_at'
    ];

    protected $table = "dictation_user";


    public function dictations(){
        return $this->belongsTo(Dictation::class, 'dictation_id', 'id');
        
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
