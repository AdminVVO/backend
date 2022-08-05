<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_listings', function (Blueprint $table) {
            $table->uuid('id_pre_listings')->primary();
            $table->string('status')->nullable();
            $table->string('propery')->nullable();
            $table->string('group')->nullable();
            $table->string('privacy')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('street')->nullable();
            $table->string('suite')->nullable();
            $table->integer('guest')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->json('amenities')->nullable();
            $table->json('photos')->nullable();
            $table->string('title')->nullable();
            $table->json('aspect')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('discount')->nullable();
            $table->json('legal')->nullable();

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
        Schema::dropIfExists('pre_listings');
    }
}
