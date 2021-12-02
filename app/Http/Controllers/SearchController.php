<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function find(Request $request)
    {

        return Ingredient::search($request->get('q'))->get();

    }
}
