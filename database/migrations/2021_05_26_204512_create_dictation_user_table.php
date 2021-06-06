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
            $table->enum('payment_method', ['tarjeta', 'transferencia', 'efectivo'])->default('tarjeta');
            $table->enum('status', ['aprobado', 'pendiente'])->default('aprobado');
             
            $table->unsignedBigInteger('dictation_id');
            $table->foreign('dictation_id')->references('id')->on('dictations')
                                                            ->onDelete('cascade')
                                                            ->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');

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
