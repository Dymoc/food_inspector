<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@fi.ru',
            'password' => 'password',
            'role' => 'admin',
            'email_verified_at' => now(),
            'updated_at' => now(),
            'created_at' => now()
        ];

        DB::table('users')->insert($data);
    }
}
