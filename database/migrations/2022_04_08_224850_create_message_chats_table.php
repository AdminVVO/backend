<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_chats', function (Blueprint $table) {
            $table->increments('id_message_chats');
            $table->text('message')->nullable();
            $table->string('type')->default('message');
            $table->string('original_name')->nullable();
            $table->boolean('report')->default(false);

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->uuid('chats_id');
            $table->foreign('chats_id')
                ->references('id_chats')
                ->on('chats')
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
        Schema::dropIfExists('message_chats');
    }
}
