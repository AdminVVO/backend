<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingHouseRulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_house_rulers', function (Blueprint $table) {
            $table->increments('id_listing_house_rulers');
            $table->boolean('suitable_for_children')->default(false);
            $table->boolean('suitable_for_infants')->default(false);
            $table->boolean('pets_allowed')->default(false);
            $table->boolean('smoking_allowed')->default(false);
            $table->boolean('events_allowed')->default(false);
            $table->mediumText('additional_rules')->nullable();
            $table->boolean('profile_photo_required')->default(false);
            $table->string('local_laws')->nullable();
            $table->string('primary_listing')->default('guests');

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
        Schema::dropIfExists('listing_house_rulers');
    }
}
