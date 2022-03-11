<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_booking_details', function (Blueprint $table) {
            $table->increments('id_listing_booking_details');
            $table->string('checkin_window_start')->nullable();
            $table->string('checkin_window_end')->nullable();
            $table->string('checkout_time')->nullable();
            $table->string('guidebooks')->nullable();
            $table->mediumText('interaction_with_guests')->default('I plan');
            $table->string('interaction_with_guests_comment')->nullable();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('zip_code')->nullable();
            $table->mediumText('directions')->nullable();
            $table->mediumText('guest_manual')->nullable();
            $table->string('arrival_instructions')->default('Smart lock');
            $table->string('wifi_details')->nullable();

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->uuid('listing_id');
            $table->foreign('listing_id')
                ->references('id_listings')
                ->on('listings')
                ->onDelete('cascade');

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
        Schema::dropIfExists('listing_booking_details');
    }
}
