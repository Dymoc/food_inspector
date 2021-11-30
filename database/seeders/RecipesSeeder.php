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
                'img' => '/images/products/product-2-2.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 200,
                'type_id' => 1
            ],
            2 => [
                'category_id' => 7,
                'name' => 'Глинтвейн',
                'img' => '/images/products/product-2-2.jpg',
                'author' => 1,
                'cooking_time' => 15,
                'cooking_level' => 'easy',
                'weight' => 900,
                'type_id' => 5
            ],
            3 => [
                'category_id' => 11,
                'name' => 'Спагетти карбонара с беконом',
                'img' => '/images/products/product-2-2.jpg',
                'author' => 1,
                'cooking_time' => 30,
                'cooking_level' => 'medium',
                'weight' => 500,
                'type_id' => 2
            ],
            4 => [
                'category_id' => 16,
                'name' => 'Сэндвич с яичницей, беконом и сыром',
                'img' => '/images/products/product-2-2.jpg',
                'author' => 1,
                'cooking_time' => 5,
                'cooking_level' => 'easy',
                'weight' => 200,
                'type_id' => 5
            ],
            5 => [
                'category_id' => 15,
                'name' => 'Суп с чечевицей и беконом',
                'img' => '/images/products/product-2-2.jpg',
                'author' => 1,
                'cooking_time' => 35,
                'cooking_level' => 'medium',
                'weight' => 800,
                'type_id' => 5
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
