<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id_listings');
            $table->string('step')->nullable();;
            $table->string('host')->nullable();;
            $table->string('description')->nullable();;
            $table->string('space')->nullable();;
            $table->json('location')->nullable();;
            $table->json('guests')->nullable();;
            $table->json('offers')->nullable();;
            $table->json('photos')->nullable();;
            $table->string('placeTitle')->nullable();;
            $table->json('placeOptions')->nullable();;
            $table->string('placeComment')->nullable();;
            $table->string('prices')->nullable();;
            $table->json('featurs')->nullable();;
            $table->string('img')->nullable();;
            $table->string('status')->default('in process');

            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('listings');
    }
}

