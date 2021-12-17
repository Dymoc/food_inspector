<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_ingredients')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $recipeIngredients = [
            1 => [36, 240, 216],
            2 => [64, 302, 269, 60, 194, 230, 2],
            3 => [213, 49, 249, 36, 183, 94],
            4 => [49, 322, 252, 212, 107, 36, 178],
            5 => [87, 49, 171, 183, 106],
            6 => [107, 171, 100, 105, 250, 183],
            7 => [63, 240, 30, 213, 59, 251, 255, 278],
            8 => [74, 255, 251, 248, 263],
            9 => [278, 75, 251],
            10 => [107, 171, 183, 243, 295, 251, 36],
            11 => [35, 107, 36, 63, 259],
            12 => [100, 59, 63, 36, 107, 64, 234, 240, 259],
            13 => [309, 135, 178, 262],
            14 => [271, 35, 185],
            15 => [148, 36, 208, 241, 240, 216, 185],
            16 => [171, 161, 183, 172, 216, 82, 222],
            17 => [149, 171, 222, 170, 183],
            18 => [158, 269, 219, 70],
            19 => [149, 183, 200, 107],
            20 => [122, 105, 107, 183],
            21 => [36, 242, 240],
            22 => [36, 322, 49],
            23 => [36, 322]
        ];
        $data = [];

        foreach ($recipeIngredients as $key => $ingredientList) {
            for ($i = 0; $i < count($ingredientList); $i++) {
                $data[] = [
                    'recipe_id' => $key,
                    'ingredient_id' => $ingredientList[$i],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
