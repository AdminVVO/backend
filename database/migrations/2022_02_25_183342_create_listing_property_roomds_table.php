<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingPropertyRoomdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_property_roomds', function (Blueprint $table) {
            $table->increments('id_listing_property_roomds');
            $table->string('like_place')->nullable();
            $table->string('property_type')->nullable();
            $table->string('listing_type')->nullable();
            $table->integer('floors')->default(0);
            $table->integer('floors_on')->default(0);
            $table->integer('bedrooms')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('additional_areas')->nullable();
            $table->string('shared_areas')->nullable();

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
        Schema::dropIfExists('listing_property_roomds');
    }
}