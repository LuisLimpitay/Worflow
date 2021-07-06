<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'last_name',
        'about'
       
    ];

    //Relacion UNO A MUCHOS
    public function courses(){
        return $this->hasOne(Course::class);
    
    }
}
