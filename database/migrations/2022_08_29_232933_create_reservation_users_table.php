<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_users', function (Blueprint $table) {
            $table->uuid('id_reservation_users')->primary();
            $table->string('status')->default('pending');
            $table->string('code_reservation')->nullable();
            $table->date('date_in')->nullable();
            $table->date('date_out')->nullable();

            $table->unsignedInteger('payment_pay_id');
            $table->foreign('payment_pay_id')
                ->references('id_payment_pays')
                ->on('payment_pays')
                ->onDelete('cascade');

            $table->uuid('listing_id');
            $table->foreign('listing_id')
                ->references('id_listings')
                ->on('listings')
                ->onDelete('cascade');

            $table->uuid('user_id');
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_users');
    }
}
