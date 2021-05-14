<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            
            $table->id();

           
            $table->integer('quantity');
            $table->enum('payment_method', ['debito', 'efectivo', 'transferencia'])->nullable();
            $table->enum('status', ['pagado', 'pendiente']);
            
            
            $table->unsignedBigInteger('dictation_id');
            $table->foreign('dictation_id')->references('id')->on('dictations');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');


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
        Schema::dropIfExists('enrollments');
    }
}
