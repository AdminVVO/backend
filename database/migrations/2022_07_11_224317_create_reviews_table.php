<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->uuid('review_id');
            $table->string('comment');
            $table->decimal('rating_cleanliness', 2, 1);
            $table->decimal('rating_communication', 2, 1);
            $table->decimal('rating_check', 2, 1);
            $table->decimal('rating_accuracy', 2, 1);
            $table->decimal('rating_location', 2, 1);
            $table->decimal('rating_value', 2, 1);
            $table->uuid('listing_id');
            $table->foreign('listing_id')
                ->references('id_listings')
                ->on('listings')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
}
