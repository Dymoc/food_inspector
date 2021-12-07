<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('user_profiles')->insert($this->getUserProfiles());
    }
    public function getUserProfiles()
    {

            $data = [
                'user_id' => 1,
                'avatar'=>'/images/resources/testi-1-2.png',
                'firstname' => 'Иван',
                'lastname' => 'Петров',
                'birthday' => '1991-04-15',
                'preferences' => 'всеядный',
                'phone' => 79258891215,
                'adress' => 'г. Москва, Пионерский переулок, д.7, кв. 12',
                'updated_at' => now(),
                'created_at' => now()
            ];


        return $data;
    }
}
