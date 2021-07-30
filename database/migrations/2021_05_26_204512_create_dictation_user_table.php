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
            $table->float('ammount', 10,2 )->default(7000);
            $table->bigInteger('reference')->nullable();
            $table->enum('status', ['aprobado', 'pendiente'])->default('aprobado')->nullable();

            $table->foreignId('dictation_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('payment_id')->constrained();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('dictation_user');
    }
}
