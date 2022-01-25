<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id_accommodations');
            $table->string('type');
            $table->string('name');
            $table->string('address1');
            $table->string('city');
            $table->string('countryCode');
            $table->string('hotelRating');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('propertyCategory');
            $table->string('proximityDistance');
            $table->string('rateCurrencyCode');
            $table->json('thumbNailUrl');
            $table->string('tripAdvisorRating');
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
        Schema::dropIfExists('accommodations');
    }
}