<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use Illuminate\Http\Request;

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

    public function findRecipeByName(Request $request)
    {
        $recipes = Recipe::query()->where('name', 'like', '%'.$request.'%')->get();
        return json_encode($recipes);
    }

}
