<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients_categories')->insert($this->getCategory());
    }

    public function getCategory(): array
    {
        $categories = [
            'Алкоголь', 'Безалкогольные напитки', 'Грибы', 'Другое', 'Зелень', 'Колбасы', 'Кондитерские изделия',
            'Консервы и заморозка', 'Крупы', 'Макароны', 'Молочные продукты', 'Морепродукты', 'Мясо', 'Овощи',
            'Орехи и сухофрукты', 'Рыба и морепродукты', 'Соусы', 'Специи и приправы', 'Сыры', 'Фрукты и ягоды',
            'Хлебные изделия'
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
