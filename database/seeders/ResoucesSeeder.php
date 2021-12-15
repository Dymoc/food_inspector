<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResoucesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'url' => 'https://a-eda.ru/interesnoe/rss.xml',
            'description' => 'https://a-eda.ru/ Вкусные блюда, напитки, наилучшие рецепты.',
            'updated_at' => now(),
            'created_at' => now()
        ];

        DB::table('resources')->insert($data);
    }
}