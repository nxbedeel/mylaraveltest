<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('images')) {
            //do nothing
        }else{
            Schema::create('images', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('size');
                $table->string('title');
                $table->string('url');
                $table->string('thumb_url');
                $table->enum('status', ['Public','Private']);
                $table->bigInteger('album_id')->unsigned();
                $table->bigInteger('user_id')->unsigned();
                $table->timestamps();
                $table->foreign('album_id')->references('id')->on('albums');
                $table->foreign('user_id')->references('id')->on('users');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
