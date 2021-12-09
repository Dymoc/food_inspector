<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\IngredientList;
use App\Models\IngredientsCategory;
use Illuminate\Http\Request;
use App\Models\UserList;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cabinet.list.index', [
            'lists' => UserList::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UserList::create([
            'name'=>$request->input('name'),
            'user_id'=>Auth::user()->id
        ]);
        return back();
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
     * @param  UserList $list
     * @return \Illuminate\Http\Response
     */
    public function edit(UserList $list)
    {
        return view('cabinet.list.edit', [
            'list' => $list,
            'ingredientList' => Ingredient::all(),
            'ingredientsCategories' => IngredientsCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserList $list)
    {
        $list->name = $request->input('name');
        $list = $list->save();
        return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateingredientList(Request $request, UserList $list)
    {
        foreach ($request->ingredients as $ingredientId) {
            if (count(IngredientList::query()->where('user_list_id', $list->id)->where('ingredient_id', $ingredientId)->get()) == 0) {
                IngredientList::create([
                    'ingredient_id' => $ingredientId,
                    'user_list_id' => $list->id,
                ]);
            }
        }
        $ids = [];
        foreach ($list->ingredientslists as $ingredient) {
            $ids[] = $ingredient->ingredient_id;
        }
        $rowsForDelete = array_diff($ids, $request->ingredients);
        if (!empty($rowsForDelete)) {
            foreach ($rowsForDelete as $id) {
                IngredientList::query()->where('ingredient_id', $id)->delete();
            }
        }
        return json_encode(['success'=>1]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,  UserList $list)
    {
        if ($request->ajax()) {
            try {
                $list->delete();
                return response()->json('ok');
            } catch (\Exception $e) {
                return response()->json('error', 400);
            }
        }
    }
}
