<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\RecipesType;
use App\Models\RecipesCategory;
use App\Models\Ingredient;
use App\Models\IngredientsCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        $favorRecipes = $recipes->only([1, 3, 5]);
        $recipes = $recipes->only([1, 2, 3]);

            return view('index', [
                'recipeList' => $recipes,
                'favorList' => $favorRecipes,
                'recipeTypes' => RecipesType::all(),
                'recipeCategories' => RecipesCategory::all(),
                'ingredientList' => Ingredient::all(),
                'ingredientsCategories' => IngredientsCategory::all()
            ]);
        
    }
}
