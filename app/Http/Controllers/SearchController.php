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
    
}
