<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('cod');
            $table->string('name');
            $table->date('dateBirth');
            $table->string('email');
            $table->string('photo');
            $table->string('genero');
            $table->string('identification');
            $table->string('username');
            $table->string('password');
            $table->string('language');
            $table->string('currency');
            $table->string('timeZone');
            $table->string('phonemain');
            // $table->unsignedBigInteger('payMethod_id');
            $table->unsignedBigInteger('wishList_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('emergencyContact_id');
            // $table->foreign('payMethod_id')->references('id_payments')->on('payments');
            $table->foreign('wishList_id')->references('id')->on('wish_lists');
            $table->foreign('address_id')->references('id_addresses')->on('addresses');
            $table->foreign('emergencyContact_id')->references('id_emergency_contacts')->on('emergency_contacts');
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
        Schema::dropIfExists('clients');
    }
}
