<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->uuid('roomId')->primary();
            $table->uuid('hotelId');
            $table->string('name');
            $table->mediumText('description');
            $table->string('starRating');
            $table->string('maxOccupancy');
            $table->json('amenities');
            $table->json('imagesUrl');

            $table->foreign('hotelId')->references('hotelId')->on('hotels');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
}
