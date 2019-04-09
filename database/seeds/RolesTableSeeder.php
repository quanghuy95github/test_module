<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name'     => 'Administrator',
                'slug'     => 'administrator',
            ],
            [
                'name'     => 'Redactor',
                'slug'     => 'redactor',
            ],
            [
                'name'     => 'User',
                'slug'     => 'user',
            ]
        ]);
    }
}
