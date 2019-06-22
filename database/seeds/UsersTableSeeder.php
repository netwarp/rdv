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
        DB::connection('mongodb')->collection('users')->truncate();

        DB::connection('mongodb')->collection('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'status' => 'admin'
            ],
            [
                'name' => 'toto',
                'email' => 'toto@toto.com',
                'password' => bcrypt('toto'),
                'status' => 'user'
            ]
        ]);
    }
}
