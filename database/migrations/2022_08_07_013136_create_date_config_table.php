<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_config', function (Blueprint $table) {
            $table->uuid('id_date_config')->primary();
            $table->date('date')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('is_active');
            $table->uuid('listing_id');
            $table->foreign('listing_id')
                ->references('id_listings')
                ->on('listings')
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
        Schema::dropIfExists('date_config');
    }
}
