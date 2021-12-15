<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ParcerContract;
use App\Http\Controllers\Controller;
use App\Jobs\NewsParsingJob;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParcerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Resource $resource)
    {
        dispatch(new NewsParsingJob($resource->url, Auth::user()->id));
        return  redirect()->route('voyager.resources.parcer.index')->with('success', trans('messages.admin.resource.parce.success'));
    }
}