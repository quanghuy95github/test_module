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
            [
                'first_name'      => 'Van',
                'last_name'     => 'Nguyen',
                'email'  => 'van@gmail.com',
                'password'  => Hash::make('123'),
                'role'  => 1,
                'description'  => 'bong da',
                'birth_date'  => date ('Y-m-d', time()),
                'phone'  => '097567567',
                'address'  => 'hung Yen',
                'avatar'  => 'sdsadasdsad',
                'created_by'  => 2,
            ],
            [
                'first_name'      => 'Hai',
                'last_name'     => 'Nguyen',
                'email'  => 'hai@gmail.com',
                'password'  => Hash::make('123'),
                'role'  => 1,
                'description'  => 'bong da',
                'birth_date'  => date ('Y-m-d', time()),
                'phone'  => '097567567',
                'address'  => 'thai binh',
                'avatar'  => 'sdsadasdsad',
                'created_by'  => 2,
            ],
            [
                'first_name'      => 'Ha',
                'last_name'     => 'Ho',
                'email'  => 'ha@gmail.com',
                'password'  => Hash::make('123'),
                'role'  => 1,
                'description'  => 'bong da',
                'birth_date'  => date ('Y-m-d', time()),
                'phone'  => '097567567',
                'address'  => 'thai nguyen',
                'avatar'  => 'sdsadasdsad',
                'created_by'  => 3,
            ],
            [
                'first_name'      => 'Nam',
                'last_name'     => 'Nguyen',
                'email'  => 'nam@gmail.com',
                'password'  => Hash::make('123'),
                'role'  => 1,
                'description'  => 'bong da',
                'birth_date'  => date ('Y-m-d', time()),
                'phone'  => '097567567',
                'address'  => 'Ha Nam',
                'avatar'  => 'sdsadasdsad',
                'created_by'  => 3,
            ],
        ]);
    }
}
