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
        $recipes = [
            1 => [
                [36],
                [240],
                [216],
            ]
        ];
        $data = [];

        foreach ($recipes as $key => $category) {
            for ($i = 0; $i < count($category); $i++) {
                $data[] = [
                    'recipe_id' => $key,
                    'ingredient_id' => $category[$i][0],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
