<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dictation;

class DictationUser extends Model
{
    use HasFactory;
    protected $table = "dictation_user";

    protected $fillable = [
        'guarded'
    ];

    public function dictations(){
        return $this->belongsTo(Dictation::class, 'dictation_id', 'id');
        
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
