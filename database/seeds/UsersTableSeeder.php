<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'      => 'Huy',
            'last_name'     => 'Quang',
            'email'  => 'huy@gmail.com',
            'password'  => Hash::make('123'),
            'role'  => 1,
            'description'  => 'bong da',
            'birth_date'  => date ('Y-m-d', time()),
            'phone'  => '097567567',
            'address'  => 'ha noi',
            'avatar'  => 'sdsadasdsad',
            'created_by'  => 1,
        ]);
    }
}
