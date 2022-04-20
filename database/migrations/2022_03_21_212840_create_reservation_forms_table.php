<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_forms', function (Blueprint $table) {
            $table->uuid('id_reservation_forms')->primary();
            $table->string('vvo_confirm')->nullable();
            $table->string('resort_confirm')->nullable();
            $table->string('date')->nullable();
            $table->string('request')->nullable();
            $table->string('name_site')->nullable();
            $table->string('costumb_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('occupation')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('status_marital')->nullable();
            $table->string('ages')->nullable();
            $table->string('combine_amount')->nullable();
            $table->string('type_card')->nullable();
            $table->string('room_type')->nullable();
            $table->string('guest_number')->nullable();
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->string('in_party')->nullable();
            $table->string('of_night')->nullable();
            $table->string('preferenc_tour')->nullable();
            $table->string('gifting')->nullable();
            $table->string('comment')->nullable();
            $table->string('tour_date')->nullable();
            $table->string('template')->nullable();

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
        Schema::dropIfExists('reservation_forms');
    }
}
