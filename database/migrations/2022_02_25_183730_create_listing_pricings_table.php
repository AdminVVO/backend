<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_pricings', function (Blueprint $table) {
            $table->increments('id_listing_pricings');
            $table->integer('base_price')->nullable();
            $table->string('listing_currency')->default('USD');
            $table->integer('max_people')->default(0);
            $table->json('allow')->default('[]');
            $table->boolean('first_guest')->default(false);
            $table->integer('weekly_discount')->default(0);
            $table->integer('monthly_discount')->default(0);
            $table->json('other_discount_array')->default('[]');
            $table->string('early_bird_discount')->nullable();
            $table->integer('early_bird_discount_porcent')->default(0);
            $table->json('last_minute_discount_array')->default('[]');
            $table->integer('cleaning_fee')->default(0);
            $table->integer('pet_fee')->default(0);
            $table->integer('linens_fee')->default(0);
            $table->integer('resort_fee')->default(0);
            $table->string('resort_type')->default('porcent');
            $table->integer('management_fee')->default(0);
            $table->string('management_type')->default('porcent');
            $table->integer('community_fee')->default(0);
            $table->string('community_type')->default('porcent');
            $table->integer('extra_guest_fee')->default(0);
            $table->integer('extra_guest')->default(0);
            $table->integer('weekend_nightly_fee')->default(0);

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
        Schema::dropIfExists('listing_pricings');
    }
}
