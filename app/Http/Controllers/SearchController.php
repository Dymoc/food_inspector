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
        /*$htmlArr = [];
        foreach ($recipeList as $recipe) {
            $difficulty = "";
            switch ($recipe->cooking_level) {

                case ('easy'):
                    $difficulty = "Для новичков";
                    break;
                case ('medium'):
                    $difficulty = "Для опытных";
                    break;
                default:
                    $difficulty = "Для профи";
                    break;
            }
            $htmlArr []= [
                'img'=>$recipe->img, 
                'id'=>$recipe->id, 
                'name'=>$recipe->name, 
                'cooking_time'=>$recipe->cooking_time,
                'difficulty'=>$difficulty];
        }*/
        return json_encode($recipeList);
    }
    public function find(Request $request)
    {

        return Ingredient::search($request->get('q'))->get();
    }
}
