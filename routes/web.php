<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientContorller as IngredientContorller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/popular', [RecipeController::class, 'popular'])->name('popular');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'news'], function () {
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/{categoryid}', [NewsController::class, 'index'])->where('categoryid', '\d+')->name('news.category');
    Route::get('/show/{news}', [NewsController::class, 'show'])->where('news', '\d+')->name('news.show');
});

//Route::resource('ingredient', IngredientContorller::class)
//    ->name('ingredient');

Route::group(['prefix' => 'ingredient'], function () {
    Route::get('/', [IngredientContorller::class, 'index'])
        ->name('ingredients');

    Route::get('/{category_id}', [IngredientContorller::class, 'category'])
        ->where('category_id', '\d+')
        ->name('ingredient.category');

    Route::get('/show/{id}', [IngredientContorller::class, 'show'])
        ->where('ingredient', '\d+')
        ->name('ingredient.show');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

