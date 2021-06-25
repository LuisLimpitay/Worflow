<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_street',
        'address_number',
        'city_id',

    ];

    //Relacion UNO A MUCHOS
    public function dictations(){
        return $this->hasMany(Dictation::class);

    }

    public function city(){
        return $this->belongsTo(City::class);

    }
}
