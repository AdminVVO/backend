<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages_regions', function (Blueprint $table) {
            $table->increments('id_languages_regions');
            $table->string('code');
            $table->string('name');
            $table->string('native');
            $table->string('currency');
            $table->string('languages');
            $table->boolean('suggested')->default(false);
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
        Schema::dropIfExists('languages_regions');
    }
}