<?php

namespace App\Services;

use Carbon\Carbon;


class Cocktails
{
    public function getAllIngredients()
    {
        $httpClient = new \GuzzleHttp\Client();
        $request =
            $httpClient
                ->get("https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list");

        $response = json_decode($request->getBody()->getContents());
        return $response;
    }
}