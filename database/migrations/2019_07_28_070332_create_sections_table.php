<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
