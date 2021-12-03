<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientsCategory;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use App\Models\RecipesCategory;
use App\Models\RecipeSteps;
use App\Models\RecipesType;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function popular()
    {
        $recipes = Recipe::all();
        $recipes = $recipes->only([mt_rand(1, 20), mt_rand(1, 20), mt_rand(1, 20)]);


        return view('recipe.index', [
            'recipeList' => $recipes
        ]);
    }
    public function show($id)
    {
        $recipe = Recipe::query()->where('id', $id)->first();
        $ingredients = RecipeIngredients::query()
        ->join('recipes', 'recipe_ingredients.recipe_id', '=', 'recipes.id')  
        ->join('ingredients', 'recipe_ingredients.ingredient_id', '=', 'ingredients.id')     
        ->where('recipe_id', $id)->get();
        $recipe_steps=RecipeSteps::query()
        ->join('recipes', 'recipe_steps.recipe_id', '=', 'recipes.id')  
        ->where('recipe_id', $id)->get();
        return view('recipe.show', [
            'recipe' => $recipe,
            'recipe_type' => $recipe->type,
            'ingredientsList' =>$ingredients,
            'recipe_steps' => $recipe_steps,
        ]);
    }
}
