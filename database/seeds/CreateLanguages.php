<?php

use Illuminate\Database\Seeder;


class CreateLanguages extends Seeder
{

    public function run()
    {
        \DB::table('languages')->insert(['name' => 'English', 'code' => 'en']);
        \DB::table('languages')->insert(['name' => 'Khmer', 'code' => 'kh']);
        \DB::table('languages')->insert(['name' => 'Thai', 'code' => 'th']);
        \DB::table('languages')->insert(['name' => 'French', 'code' => 'fr']);
        \DB::table('languages')->insert(['name' => 'Japan', 'code' => 'jp']);
    }
}