<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i<10; $i++){
             DB::table('category')->insert([
                'name' => str_random(10),
                'description' => str_random(20),
            ]);   
        }
       
    }
}
