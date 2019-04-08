<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	[
        		'title' => 'title post one',
        		'content' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
        		'view'	=> 400
        	],
        	        	[
        		'title' => 'title post two',
        		'content' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
        		'view'	=> 200
        	],
        	        	[
        		'title' => 'title post three',
        		'content' => 'cccccccccccccccccccccccccccccccccccccccccccccccc',
        		'view'	=> 100
        	],
        	        	[
        		'title' => 'title post four',
        		'content' => 'dddddddddddddddddddddddddddddddddddddddddddddddd',
        		'view'	=> 300
        	],
        ]);
    }
}
