<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'dictations';
    //REVISAR ESTO EN LA DOC DE CARBON
    protected $dates = ['date'];


    //relaciona mis trablas
    public function scopePublished($query)
    {
        $query->with('places', 'courses')
            ->orderBy('date','desc');
    }

 
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
                    ->withPivot( 'id', 'quantity', 'ammount', 'reference', 'payment_id', 'status' , 'dictation_id', 'user_id', 'created_at');

    }


}
