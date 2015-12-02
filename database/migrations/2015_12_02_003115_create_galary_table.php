<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if (Schema::hasTable('galary')) {
              // do nothing 
             
          }else{
               Schema::create('galary', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('desctiprion');
                $table->bigInteger('cat_id');
                $table->timestamps();
               // $table->foreign('cat_id')->references('id')->on('category');
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
        Schema::drop('galary');
    }
}
