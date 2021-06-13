<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'slug',
        'description',
        'content',
        'mode',
        'price',
        'teacher_id'  

    ];

    protected $table = 'courses';
    
    // ESTO ES DEL MODELO Y ME PERMITE USAR EL SLUG PARA URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relacion UNO A MUCHOS 
    public function dictations(){
        return $this->hasMany(Dictation::class);
    
    }

    //Relacion UNO A UNO INVERSA
    public function teachers(){
        return $this->belongsTo(Teacher::class, "teacher_id" , "id");
    
    }
}


