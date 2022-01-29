<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->uuid('hotelId')->primary();
            $table->string('name');
            $table->string('currency');
            $table->string('starRating');
            $table->mediumText('description');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('websiteUrl');
            $table->json('imagesUrl');
            $table->json('address');
            $table->json('location');
            $table->json('amenities');
            $table->integer('roomCount');
            $table->string('checkIn');
            $table->string('checkOut');
            $table->mediumText('termsAndConditions');
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
        Schema::dropIfExists('hotels');
    }
}
