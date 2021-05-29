<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictation_user', function (Blueprint $table) {
            $table->id();

            $table->integer('quantity');
            $table->decimal('ammount', 10,2 );

            $table->enum('payment_method', ['tarjeta', 'transferencia', 'efectivo']);
            $table->enum('status', ['aprobado', 'pendiente']);
             
            $table->unsignedBigInteger('dictation_id');
            $table->foreign('dictation_id')->references('id')->on('dictations');

            $table->unsignedBigInteger('user_id');
            //SI ELIMINO UN USER QUE SE ELIMINE EL REGISTRO QUE TENGO EN ESTA TABLA
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('dictation_user');
    }
}
