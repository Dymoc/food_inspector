<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResourceRequest;
use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view("admin.resources.index", [
            "resources" => Resource::all(),
        ]);
    }

}