<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_client', function (Blueprint $table) {
            $table->uuid('id_review_client')->primary();

            $table->uuid('user_id');
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');
                
            $table->uuid('reservation_id');
            $table->foreign('reservation_id')
                ->references('id_reservation')
                ->on('reservations')
                ->onDelete('cascade');

            $table->boolean('option');
            $table->text('review', 500);
            $table->text('note', 500);
            $table->decimal('rating_cleanliness', 2, 1);
            $table->decimal('rating_communication', 2, 1);
            $table->decimal('rating_observance', 2, 1);
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
        Schema::dropIfExists('review_client');
    }
}
