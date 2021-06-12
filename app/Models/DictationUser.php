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
        'payment_method',
        'status',
        'dictation_id',
        'user_id',
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


    public function dictation(){
        return $this->belongsTo(Dictation::class);

    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
