<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('day_time_id');
            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('day_time_id')->references('id')->on('day_times')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slot_rooms');
    }
}
