<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_pays', function (Blueprint $table) {
            $table->increments('id_payment_pays');
            $table->string('status');
            $table->string('order');
            $table->string('payer_id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('currency');
            $table->decimal('amount', 2);

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
        Schema::dropIfExists('payment_pays');
    }
}