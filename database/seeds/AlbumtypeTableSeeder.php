<?php

use Illuminate\Database\Seeder;

class AlbumtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i<10; $i++){
             DB::table('album_types')->insert([
                'name' => str_random(10),
                'description' => str_random(20),
            ]);   
        }
       
    }
}
