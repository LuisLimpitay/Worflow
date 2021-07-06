<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dictation;
use Illuminate\Support\Facades\DB;

class DictationUser extends Model
{
    use HasFactory;


    protected $fillable = [
        'quantity',
        'ammount',
        'reference',
        'status',

        'dictation_id',
        'user_id',
        'payment_id',

        'created_at',
        'upadte_at'
    ];

    protected $table = "dictation_user";

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($pivot){

            DB::table('dictations')
                ->where('id', $pivot->dictation->id)
                ->update(['stock' => $pivot->dictation->stock + 1]);

        });
    }

    //A UNO
    public function dictation(){
        return $this->belongsTo(Dictation::class);

    }
    //A UNO
    public function user(){
        return $this->belongsTo(User::class);
    }

    //A UNO
    public function payment(){
        return $this->belongsTo(Payment::class);

    }

}
