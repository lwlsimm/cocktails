<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocktailController;
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

Route::get('/', function() {
  return view('index');
});

Route::get('/ingredient-search',[CocktailController::class, 'ingredientSearch']);
Route::get('/cocktail-search/{ingredient}/',[CocktailController::class, 'cocktailSearch']);
Route::get('/cocktailView/{cocktail}/',[CocktailController::class, 'getCocktail']);


