<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingCalendarAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_calendar_availabilities', function (Blueprint $table) {
            $table->increments('id_listing_calendar_availabilities');
            $table->string('minimum_stay')->nullable();
            $table->json('minimum_stay_custom')->default('[]');
            $table->string('maximum_stay')->nullable();
            $table->string('advance_notice')->nullable();
            $table->string('preparation_time')->nullable();
            $table->string('availability_window')->nullable();
            $table->json('restricted_checkin_days')->default('[]');
            $table->json('restricted_checkout_days')->default('[]');

            $table->uuid('user_id');
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
        Schema::dropIfExists('listing_calendar_availabilities');
    }
}
