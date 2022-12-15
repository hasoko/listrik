<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id_user' => 1,
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'status' => 'Admin',

            ],
            [
                'id_user' => 2,
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'status' => 'Kasir',

            ],
            [
                'id_user' => 3,
                'username' => 'petugas',
                'password' => bcrypt('123456'),
                'status' => 'Petugas',

            ],

        ];

        DB::table('user')->insert($user);
    }
}
