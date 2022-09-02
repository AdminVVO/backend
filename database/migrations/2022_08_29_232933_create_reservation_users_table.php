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
            $table->string('status')->default(2);
            $table->string('code_reservation');
            $table->date('date_in');
            $table->date('date_out');
            $table->json('guest');
            $table->decimal('total_amount', 10,2);
            $table->decimal('reserv_amount', 10,2);
            $table->string('private_note')->nullable();
            $table->json('services');

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

            $table->uuid('user_id_listing');
            $table->foreign('user_id_listing')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->uuid('user_id');
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
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
        Schema::dropIfExists('reservation_users');
    }
}
