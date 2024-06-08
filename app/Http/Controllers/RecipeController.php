<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function index()
    {
        $apiKey = 1084303518855984328;
        $categoryId = "30-300"; // 例えば、カテゴリID 10（適宜変更）

        $response = Http::get('https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20170426', [
            'format' => "json",
            'applicationId' => $apiKey,
            'categoryId' => $categoryId,
        ]);

        $recipes = $response;
// dd($recipes);
        return view('recipes.index', compact('recipes'));
    }

    public function add(Request $request)
    {
        $apiKey = "1084303518855984328";
        $categoryId = $request->category; // 例えば、カテゴリID 10（適宜変更）

        $response = Http::get('https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20170426', [
            'format' => "json",
            'applicationId' => $apiKey,
            'categoryId' => $categoryId,
        ]);

        $recipes = $response;
// dd($recipes);
        return view('recipes.index', compact('recipes'));
    }
    

  
}
