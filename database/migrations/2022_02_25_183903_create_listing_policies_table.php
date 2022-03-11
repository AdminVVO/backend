<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_policies', function (Blueprint $table) {
            $table->increments('id_listing_policies');
            $table->string('cancellation_policy')->default('Moderate');
            $table->string('instant_book')->default('on');
            $table->string('checkin_window_start')->nullable();
            $table->string('checkin_window_end')->nullable();
            $table->string('checkout_time')->nullable();
            $table->string('security_deposit')->nullable();

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
        Schema::dropIfExists('listing_policies');
    }
}
