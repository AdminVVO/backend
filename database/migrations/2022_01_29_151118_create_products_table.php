<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('cod');
            $table->string('name');
            $table->integer('numBath');
            $table->integer('numRoom');
            $table->integer('numBalneario');
            $table->string('location');
            $table->string('description');
            $table->string('linkPersonal');
            $table->string('language');
            $table->string('listStatus');
            $table->string('amenities');
            $table->string('security');
            $table->json('outstandingService');
            $table->json('favorite');
            $table->json('alarm');
            $table->json('imgUrl');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('description_id');
            $table->unsignedBigInteger('typespace_id');
            $table->foreign('category_id')->references('id')->on('category_products');
            $table->foreign('type_id')->references('id')->on('type_products');
            $table->foreign('description_id')->references('id')->on('description_products');
            $table->foreign('typespace_id')->references('id')->on('type_space_products');
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
        Schema::dropIfExists('products');
    }
}
