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
            5 => [87, 49, 171, 183, 106]
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
