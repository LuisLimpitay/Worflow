<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_street',
        'address_number',
        'city'
    ];

    //Relacion UNO A MUCHOS 
    public function dictations(){
        return $this->hasMany(Dictation::class);
    
    }
}
