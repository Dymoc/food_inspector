<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert($this->getNews());
    }
    public function getNews()
    {
        $categories = [
            'Рецепты', 'Продукты', 'Разное'
        ];

        $data = [];
        for($i = 0; $i < count($categories); $i++) {
            $data[] = [
                'name' => $categories[$i],
                'updated_at' => now(),
                'created_at' => now()
            ];
        }

        return $data;
    }
}
