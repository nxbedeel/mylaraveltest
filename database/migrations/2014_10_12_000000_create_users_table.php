<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
              // do nothing 
             
          }else{
                Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('status');
                $table->string('name');
                $table->enum('user_type', ['Admin', 'Client','Guest']);
                $table->string('email')->unique();
                $table->string('password', 60);
                $table->rememberToken();
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
        Schema::drop('users');
    }
}
