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

            $table->integer('quantity')->default(1);
            $table->decimal('ammount', 10,2 )->default(7000);
            $table->bigInteger('reference')->nullable();
            $table->enum('status', ['aprobado', 'pendiente'])->default('aprobado')->nullable();


            $table->unsignedBigInteger('dictation_id');
            $table->foreign('dictation_id')->references('id')->on('dictations');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');


            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('dictation_user');
    }
}
