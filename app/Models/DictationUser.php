<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dictation;

class DictationUser extends Model
{
    use HasFactory;


    protected $fillable = [
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


    public function dictation(){
        return $this->belongsTo(Dictation::class);

    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
