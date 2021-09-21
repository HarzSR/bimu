<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view-recipe', [App\Http\Controllers\RecipeController::class, 'index']);
Route::post('/add-recipe', [App\Http\Controllers\RecipeController::class, 'store']);
Route::get('/get-recipe/{id}', [App\Http\Controllers\RecipeController::class, 'show']);
