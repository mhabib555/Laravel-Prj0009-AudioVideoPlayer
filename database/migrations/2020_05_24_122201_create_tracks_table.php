<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('album_id');
            $table->unsignedBigInteger('media_type_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('milliseconds');
            $table->unsignedBigInteger('bytes');
            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('publisher_id');
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
        Schema::dropIfExists('tracks');
    }
}
