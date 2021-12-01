<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    public function index($flag = null)
    {
        if ($flag !== null) {
            return view('news.index', [
                'news' =>News::query()->where('category_id', '=',$flag)->get(),
            ]);
        } else {
            return view('news.index', [
                'news' => News::all()
            ]);
        }
    }
    public function show(News $news)
    {
        return view('news.show', [
            'recentNews' => News::query()->limit(3)->get(),
            'news' => $news,
            'categories' => NewsCategory::all()
        ]);
    }
}
