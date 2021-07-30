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

            $table->date('date')->unique();
            $table->time('time');
            $table->integer('stock');

            $table->foreignId('place_id')->constrained();
            $table->foreignId('course_id')->constrained();

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
