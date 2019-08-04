<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('slot_id');
            $table->timestamps();
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('slot_id')->references('id')->on('class_time_slots')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_times');
    }
}
