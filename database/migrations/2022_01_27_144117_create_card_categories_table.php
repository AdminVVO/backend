<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('date');
            $table->string('distance');
            $table->json('thumbNailUrl');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('card_categories');
        
    }
}
