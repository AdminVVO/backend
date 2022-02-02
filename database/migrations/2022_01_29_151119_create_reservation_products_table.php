<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_products', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('guest');
            $table->date('dateEntry');
            $table->date('dateDeparture');
            $table->date('dateBooking');
            $table->string('list');
            $table->double('totalPay', 10, 2);
            $table->double('supportPayment', 10, 2);
            $table->double('reserveAmount', 10, 2);
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('reservation_products');
    }
}
