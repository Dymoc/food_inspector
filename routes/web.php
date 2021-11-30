<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientContorller as IngredientContorller;

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

Route::get('/', function () {
    return view('index');

})->name('index');

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

Route::group(['prefix' => 'ingrediet'], function () {
    Route::get('/', [IngredientContorller::class, 'index'])
        ->name('ingrediets');
    Route::get('/{categoryid}', [IngredientContorller::class, 'index'])
        ->where('categoryid', '\d+')
        ->name('ingrediet.category');
    Route::get('/show/{news}', [IngredientContorller::class, 'show'])
        ->where('ingrediet', '\d+')
        ->name('ingrediet.show');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

