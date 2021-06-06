<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'time',        
        'stock',
        'status',
        'place_id',        
        'course_id',

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
    public function users(){
        return $this->belongsToMany(User::class, 'dictation_user')
                    ->withTimestamps()
                    ->withPivot( 'id', 'quantity', 'ammount', 'payment_method', 'status' , 'dictation_id', 'user_id', 'created_at');

    }

}
