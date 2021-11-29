<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_steps')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $steps = [
            1 => [
                [1, 'Влейте в сковороду масло, дайте ему хорошо нагреться', '/images/products/product-2-1.jpg'],
                [2, 'Разбейте яйца в сковороду', '/images/products/product-2-1.jpg'],
                [3, 'Посолите по вкусу', '/images/products/product-2-1.jpg'],
                [4, 'Жарьте яйца до готовности 5-7 минут', '/images/products/product-2-1.jpg'],
            ]
        ];
        $data = [];

        foreach ($steps as $key => $recipe) {
            for ($i = 0; $i < count($recipe); $i++) {
                $data[] = [
                    'recipe_id' => $key,
                    'step_number' => $recipe[$i][0],
                    'description' => $recipe[$i][1],
                    'img' => $recipe[$i][2],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
