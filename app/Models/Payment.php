<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Relacion UNO A MUCHOS
    public function dictationuser(){
        return $this->hasMany(DictationUser::class);

    }

}
