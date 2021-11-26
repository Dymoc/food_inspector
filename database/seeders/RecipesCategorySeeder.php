<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_categories')->insert($this->getCategory());
    }

    public function getCategory(): array
    {
        $categories = [
            'Варенья и джемы', 'Выпечка', 'Гарниры', 'Десерт', 'Завтрак', 'Закуски', 'Коктейли',
            'Консервация и заготовки', 'На углях', 'Напитки', 'Основные блюда', 'Салаты', 'Сладкие блюда',
            'Соусы и дипы', 'Супы', 'Фаст Фуд'
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
