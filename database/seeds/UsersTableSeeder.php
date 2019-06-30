<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

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

        # User 1
        $data = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'status' => 'admin',
        ];
        $user = new User;
        foreach ($data as $key => $value) {
            $user[$key] = $value;
        }
        $user->save();
        $_SESSION['users'][] = $user;

        # User 2
        $data = [
            'name' => 'toto',
            'email' => 'toto@toto.com',
            'password' => bcrypt('toto'),
            'status' => 'user',
        ];
        $user = new User;
        foreach ($data as $key => $value) {
            $user[$key] = $value;
        }
        $user->save();
        $_SESSION['users'][] = $user;
    }
}
