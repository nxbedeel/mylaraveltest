<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         if (Schema::hasTable('users')) {
            //do nothing
            }else{
            DB::table('users')->insert([
                'name' => str_random(10),
                'choices' => 'Client',
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
            }
    }
}
