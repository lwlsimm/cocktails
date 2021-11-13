<?php

namespace App\Http\Controllers;

//use App\Services\Cocktails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

// class CocktailController extends Controller
// {   
//     public function ingredientSearch(Cocktails $cocktails) {
//         $allIngredients = $cocktails-> getAllIngredients();
//         return view('index', [
//             'ingredients' => $allIngredients,
//         ]);
//     }
//     public function cocktailSearch($ingredient) {
//         $drinks = Http::post('www.thecocktaildb.com/api/json/v1/1/filter.php?i='.$ingredient);
//         return $drinks->json();
//     }   
// }

class CocktailController extends Controller 
{
    public function ingredientSearch()
    {
        $response = Http::get("https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list");
        $json = json_decode($response);
        return view('index', [
            'ingredients' => $json
        ]);
    }
    public function cocktailSearch($ingredient)
    {   
        $path = "https://www.thecocktaildb.com/api/json/v1/1/filter.php?i=".$ingredient;
        $response = Http::get($path);
        $json = json_decode($response);
        return view('drinks', [
            'ingredient' => $ingredient,
            'drinksData' => $json
        ]);
    }

    public function getCocktail($cocktail)
    {
        $path = "https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=".$cocktail;
        $response = Http::get($path);
        $json = json_decode($response);
        return view('cocktailView', [
            'cocktail' => $json
        ]);
    }
}
