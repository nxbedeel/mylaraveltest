<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         if (Schema::hasTable('images_setting')) {
            //do nothing
        }else{
            Schema::create('images_setting', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('type_allow');
                $table->string('size_allow');
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
        //
        Schema::drop('images_setting');
    }
}
