<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use App\Models\RecipesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function findByIngredients(Request $request)
    {
        $data = [];
        $ids = $request->ingredients;
        $recipes = RecipeIngredients::query()->select('recipe_id')->groupBy('recipe_id')->whereIn('ingredient_id', $ids)
            ->get();
        foreach ($recipes as $recipe) {
            $data[] = $recipe->recipe_id;
        }
        $recipeList = Recipe::query()->whereIn('id', $data)->get();
        return json_encode($recipeList);
    }

    public function find(Request $request)
    {
        return Ingredient::search($request->get('q'))->get();
    }

    public function findByRecipeName(Request $request)
    {
         $recipes = Recipe::query()->where('name', 'like', '%'.$request->name.'%')
        ->get();
        return json_encode($recipes);
    }

    public function findByRecipeCategory(Request $request)
    {
         $recipes = Recipe::query()->where('category_id', $request->category_id)
        ->get();
        return json_encode($recipes);
    }

    public function findByRecipeOptions(Request $request) {
        if ($request->recipe_type == 0) {
            $type = [1, 2, 3, 4, 5];
        } else {
            $type = [$request->recipe_type];
        }

        $notIngredientsList = [];
        if ($request->EatMeat != "on") {
            $notIngredientsList[] = 13;
        }
        if ($request->NotEat) {
            foreach ($request->NotEat as $item) {
                $notIngredientsList[] = $item;
            }
        }

        $notRecipesList = [];
        if ($notIngredientsList) {
            $notRecipes = DB::table('recipe_ingredients')
                ->join('ingredients', 'recipe_ingredients.ingredient_id', '=', 'ingredients.id')
                ->select('recipe_ingredients.recipe_id')
                ->whereIn('ingredients.category_id', $notIngredientsList)
                ->get();
            foreach ($notRecipes as $notRecipe) {
                $notRecipesList[] = $notRecipe->recipe_id;
            }
        } else {
            $notRecipesList[] = 0;
        }

        if (!$request->cooking_level) {
            $cooking_level = ['easy'];
        } else {
            switch ($request->cooking_level[count($request->cooking_level)-1]) {
                case 'hard' : $cooking_level = ['easy', 'medium', 'hard'];
                    break;
                case 'medium' : $cooking_level = ['easy', 'medium'];
                    break;
                default: $cooking_level = ['easy'];
            }
        }

        $data = [];
        $recipes = DB::table('recipes')
            ->join('recipes_types', 'recipes_types.id', '=', 'recipes.type_id')
            ->join('recipe_ingredients', 'recipe_ingredients.recipe_id', '=', 'recipes.id')
            ->join('eat_values', 'eat_values.ingredient_id', '=', 'recipe_ingredients.ingredient_id')
            ->select('recipes.id')
            ->whereIn('recipes_types.id', $type)
            ->whereIn('recipes.cooking_level', $cooking_level)
            ->where('recipes.cooking_time', '<', $request->time)
            ->whereNotIn('recipes.id', $notRecipesList)
            ->get();

        foreach ($recipes as $recipe) {
            $data[] = $recipe->id;
        }

        $recipeList = Recipe::query()->whereIn('id', $data)->get();
        return json_encode($recipeList);
    }
}
