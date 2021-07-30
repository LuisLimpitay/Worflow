<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->longText('content');
            $table->string('mode');
            $table->float('price', 8,2);

            $table->foreignId('teacher_id')->constrained();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
