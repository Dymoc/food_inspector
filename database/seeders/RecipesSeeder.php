<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $recipes = [
            1 => [
                'category_id' => 5,
                'name' => 'Яичница',
                'img' => '/images/products/recipe0000001.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 200,
                'type_id' => 1
            ],
            2 => [
                'category_id' => 7,
                'name' => 'Глинтвейн',
                'img' => '/images/products/recipe0000002.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 900,
                'type_id' => 5
            ],
            3 => [
                'category_id' => 11,
                'name' => 'Спагетти карбонара с беконом',
                'img' => '/images/products/recipe0000003.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'medium',
                'weight' => 500,
                'type_id' => 2
            ],
            4 => [
                'category_id' => 16,
                'name' => 'Сэндвич с яичницей, беконом и сыром',
                'img' => '/images/products/recipe0000004.jpg',
                'author' => 1,
                'cooking_time' => 5,
                'cooking_level' => 'easy',
                'weight' => 200,
                'type_id' => 5
            ],
            5 => [
                'category_id' => 15,
                'name' => 'Суп с чечевицей и беконом',
                'img' => '/images/products/recipe0000005.jpeg',
                'author' => 1,
                'cooking_time' => 35,
                'cooking_level' => 'medium',
                'weight' => 800,
                'type_id' => 5
            ],
            6 => [
                'category_id' => 15,
                'name' => 'Крем-суп из брокколи и голубого сыра',
                'img' => '/images/products/recipe0000006.jpeg',
                'author' => 1,
                'cooking_time' => 50,
                'cooking_level' => 'easy',
                'weight' => 1000,
                'type_id' => 2
            ],
            7 => [
                'category_id' => 16,
                'name' => 'Пицца с голубым сыром и грушей',
                'img' => '/images/products/recipe0000007.jpg',
                'author' => 1,
                'cooking_time' => 25,
                'cooking_level' => 'medium',
                'weight' => 750,
                'type_id' => 4
            ],
            8 => [
                'category_id' => 16,
                'name' => 'Пицца «Четыре сыра» на оливковом масле',
                'img' => '/images/products/recipe0000008.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'medium',
                'weight' => 600,
                'type_id' => 4
            ],
            9 => [
                'category_id' => 2,
                'name' => 'Открытый пирог с грушами и горгонзолой',
                'img' => '/images/products/recipe0000009.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'easy',
                'weight' => 800,
                'type_id' => 4
            ],
            10 => [
                'category_id' => 5,
                'name' => 'Омлет с тыквой, карамелизованным луком, горгонзолой и шалфеем',
                'img' => '/images/products/recipe0000010.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'easy',
                'weight' => 500,
                'type_id' => 1
            ],
            11 => [
                'category_id' => 4,
                'name' => 'Брауни со сливочной сырной начинкой',
                'img' => '/images/products/recipe0000011.jpg',
                'author' => 1,
                'cooking_time' => 60,
                'cooking_level' => 'medium',
                'weight' => 600,
                'type_id' => 5
            ],
            12 => [
                'category_id' => 2,
                'name' => 'Булочки с корицей синнабон',
                'img' => '/images/products/recipe0000012.jpg',
                'author' => 1,
                'cooking_time' => 120,
                'cooking_level' => 'hard',
                'weight' => 800,
                'type_id' => 5
            ],
            13 => [
                'category_id' => 6,
                'name' => 'Рулетики с семгой и сыром филадельфия',
                'img' => '/images/products/recipe0000013.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 500,
                'type_id' => 4
            ],
            14 => [
                'category_id' => 4,
                'name' => 'Бананы в шоколаде',
                'img' => '/images/products/recipe0000014.jpg',
                'author' => 1,
                'cooking_time' => 35,
                'cooking_level' => 'easy',
                'weight' => 400,
                'type_id' => 5
            ],
            15 => [
                'category_id' => 11,
                'name' => 'Хрустящие куриные ножки',
                'img' => '/images/products/recipe0000015.jpg',
                'author' => 1,
                'cooking_time' => 60,
                'cooking_level' => 'medium',
                'weight' => 600,
                'type_id' => 2
            ],
            16 => [
                'category_id' => 11,
                'name' => 'Гречка с мясом и томатами по-купечески',
                'img' => '/images/products/recipe0000016.jpg',
                'author' => 1,
                'cooking_time' => 60,
                'cooking_level' => 'easy',
                'weight' => 500,
                'type_id' => 2
            ],
            17 => [
                'category_id' => 11,
                'name' => 'Азу по-татарски',
                'img' => '/images/products/recipe0000017.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'easy',
                'weight' => 600,
                'type_id' => 2
            ],
            18 => [
                'category_id' => 11,
                'name' => 'Свинина в апельсиновой глазури',
                'img' => '/images/products/recipe0000018.jpg',
                'author' => 1,
                'cooking_time' => 90,
                'cooking_level' => 'hard',
                'weight' => 800,
                'type_id' => 5
            ],
            19 => [
                'category_id' => 11,
                'name' => 'Острый ростбиф с чесноком',
                'img' => '/images/products/recipe0000019.jpg',
                'author' => 1,
                'cooking_time' => 120,
                'cooking_level' => 'hard',
                'weight' => 800,
                'type_id' => 5
            ],
            20 => [
                'category_id' => 11,
                'name' => 'Мидии в чесночно-сливочном соусе',
                'img' => '/images/products/recipe0000020.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 400,
                'type_id' => 2
            ],
        ];

        $data = [];

        foreach ($recipes as $recipe) {
            $data[] = [
                'category_id' => $recipe['category_id'],
                'name' => $recipe['name'],
                'img' => $recipe['img'],
                'author' => $recipe['author'],
                'cooking_time' => $recipe['cooking_time'],
                'cooking_level' => $recipe['cooking_level'],
                'weight' => $recipe['weight'],
                'type_id' => $recipe['type_id'],
                'updated_at' => now(),
                'created_at' => now()
            ];
        }

        return $data;
    }
}
