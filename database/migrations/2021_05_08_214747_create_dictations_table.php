<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictations', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->time('time');
            $table->integer('stock');
            $table->integer('duration');
            
            
            $table->unsignedBigInteger('place_id');
            $table->foreign('place_id')->references('id')->on('places');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictations');
    }
}
