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
            $table->uuid('id_listings')->primary();
            $table->string('step')->nullable();
            $table->string('title')->nullable();
            $table->string('internal_title')->nullable();
            $table->mediumText('descriptions')->nullable();
            $table->mediumText('space')->nullable();
            $table->mediumText('guest_access')->nullable();
            $table->mediumText('other_details')->nullable();
            $table->integer('number_guests')->default(0);
            $table->string('custom_link')->nullable();
            $table->string('language_default')->default('EN');
            $table->string('status')->default('in process');
            $table->string('resort')->nullable();
            $table->string('template')->nullable();
            $table->json('amenities')->nullable();
            $table->json('safety')->nullable();
            $table->json('photos')->nullable();
            $table->json('category')->nullable();
            $table->json('featurs')->nullable();
            $table->json('snooze')->default('[]');

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