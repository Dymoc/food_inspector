<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\IngredientsCategory;
use App\Models\Recipe;
use App\Models\RecipeIngredients;
use App\Models\RecipesCategory;
use App\Models\RecipeSteps;
use App\Models\RecipesType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabinet.recipe.index', [
            'recipes' => Recipe::query()->where('author', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabinet.recipe.create', [
            "types" => RecipesType::all(),
            "categories" => RecipesCategory::all(),
            'ingredientsCategories' => IngredientsCategory::all(),
            'ingredientList' => Ingredient::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('img')) {
            $imageName = uniqid('file-') . '.' . $request->file('img')->getClientOriginalExtension();
            $path = $request->file('img')->storeAs('products',  $imageName, 'images');
            $img =  $path;
            File::move(public_path() . "/storage/" . $path, public_path() . "/" . "images/" . $path);
        }
        $recipe = Recipe::create([
            'name' => $request->input('name'),
            'cooking_time' => $request->input('cooking_time'),
            'weight' => $request->input('weight'),
            'cooking_level' => $request->input('cooking_level'),
            'category_id' => $request->input('category_id'),
            'type_id' => $request->input('type_id'),
            'img' => isset($img) ? "/images/" . $img : NULL
        ]);
        if ($recipe) {
            $ingredientsIds = explode(",", $request->input('q'));
            foreach ($ingredientsIds as $ingredientId) {
                RecipeIngredients::create([
                    'recipe_id' => $recipe->id,
                    'ingredient_id' => $ingredientId,
                ]);
            }
            $i = 1;
            foreach ($request->description as $step) {
                RecipeSteps::create([
                    'recipe_id' => $recipe->id,
                    'step_number' => $i++,
                    'description' => $step,
                    'img' => isset($img) ? "/images/" . $img : NULL
                ]);
            }
        }
        return json_encode(['success'=>1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
