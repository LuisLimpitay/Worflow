<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictation extends Model
{
    use HasFactory;

    protected $fillable = [

        'date',
        'time',        
        'stock',
        'place_id',        
        'course_id'

    ];

    protected $table = 'dictations';

    
    //Relacion A UNO INVERSA
    public function courses(){
        return $this->belongsTo(Course::class, "course_id" , "id" );

    }

    //Relacion A UNO INVERSA
    public function places(){
        return $this->belongsTo(Place::class, "place_id" , "id");

    }
    

    
    //Relacion UNO A MUCHOS
    public function enrollments(){
        return $this->hasMany(Enrollment::class);

    }
}
