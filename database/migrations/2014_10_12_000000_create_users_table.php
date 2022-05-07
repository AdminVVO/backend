<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('user.png');
            $table->string('phone')->nullable()->unique();
            $table->json('other_phone')->default('[]');
            $table->string('sex')->nullable();
            $table->string('language_default')->default('US');
            $table->string('currency_default')->default('USD');
            $table->string('timezone_default')->default('UTC-04:30');
            $table->boolean('promotions')->default(false);
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('facebook_token')->nullable();
            $table->string('govermen_id')->nullable();
            $table->string('acount_actived')->default(true);
            $table->string('service_fee')->default('simplified');
            $table->string('constributions')->default(false);
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();

            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')
                ->references('id_roles')
                ->on('roles')
                ->onDelete('cascade');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}