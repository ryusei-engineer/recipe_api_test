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
            'applicationId' => $apiKey,
            'categoryId' => $categoryId,
        ]);

        $recipes = $response->json();

        return view('recipes.index', compact('recipes'));
    }

    public function search(Request $request)
{
    // 検索ロジックをここに追加する

    // 例えば、ダミーの検索結果を作成
    $results = [
        (object)['title' => 'レシピ1'],
        (object)['title' => 'レシピ2'],
        // 他の検索結果
    ];

    // ビューに検索結果を渡して表示
    return view('recipes.search_results', compact('results'));
}
}
