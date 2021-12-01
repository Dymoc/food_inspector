<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientsCategory;
use App\Models\Recipe;
use App\Models\RecipesCategory;
use App\Models\RecipesType;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function popular()
    {
        $recipes = Recipe::all();
        $recipes = $recipes->only([1, 3, 5]);


        return view('recipe/index', [
            'recipeList' => $recipes
        ]);
    }
}
