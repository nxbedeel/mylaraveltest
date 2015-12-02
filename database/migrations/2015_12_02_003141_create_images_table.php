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
                $table->string('url');
                $table->enum('status', ['Public','Private']);
                $table->integer('galary_id')->unsigned();
                $table->timestamps();
                $table->foreign('galary_id')->references('id')->on('galary');
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
        Schema::drop('iamges');
    }
}
