<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->uuid('id_chats')->primary();
            $table->boolean('archived_transm')->default(false);
            $table->boolean('favorites_transm')->default(false);
            $table->boolean('unread_transm')->default(false);
            $table->boolean('archived_receiv')->default(false);
            $table->boolean('favorites_receiv')->default(false);
            $table->boolean('unread_receiv')->default(false);
            $table->boolean('order_receiver')->default(false);
            $table->boolean('order_transmitter')->default(false);

            $table->uuid('transmitter_id');
            $table->foreign('transmitter_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->uuid('receiver_id');
            $table->foreign('receiver_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->uuid('listing_id');
            $table->foreign('listing_id')
                ->references('id_listings')
                ->on('listings')
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
        Schema::dropIfExists('chats');
    }
}
