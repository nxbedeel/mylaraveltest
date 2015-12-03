<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('albums')) {
              // do nothing 
             
          }else{
               Schema::create('albums', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('desctiprion');
                $table->timestamps();
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
        Schema::drop('albums');
    }
}
