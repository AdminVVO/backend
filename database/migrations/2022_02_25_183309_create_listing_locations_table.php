<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_locations', function (Blueprint $table) {
            $table->increments('id_listing_locations');
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('suite')->nullable();
            $table->string('zip_code')->nullable();
            $table->mediumText('neighborhood_description')->nullable();
            $table->mediumText('getting_around')->nullable();
            $table->string('location_sharing')->default('Specific location');
            $table->boolean('privacy_cancellations')->default(false);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->json('scenic_views')->default('[]');

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
        Schema::dropIfExists('listing_locations');
    }
}
