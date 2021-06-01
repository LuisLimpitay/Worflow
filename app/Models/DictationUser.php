<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictationUser extends Model
{
    use HasFactory;
    protected $table = "dictation_user";

    protected $fillable = [
        'guarded'
    ];

    public function dictations1(){
        return $this->belongsTo(Dictation::class, 'dictation_id', 'id');
        
    }
    public function users1(){
        return $this->belongsTo(User::class);
    }
}
