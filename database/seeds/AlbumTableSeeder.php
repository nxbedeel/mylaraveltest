<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => str_random(10),
            'desctiprion' => str_random(20),
            'cat_id' => rand(1, 5),
        ]);
    }
}
