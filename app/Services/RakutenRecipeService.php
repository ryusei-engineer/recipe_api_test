<?php

// namespace App\Services;

// use Illuminate\Support\Facades\Http;

// class RakutenRecipeService
// {
//     protected $appId;

//     public function __construct()
//     {
//         $this->appId = env('RAKUTEN_APP_ID');
//     }

//     public function getRecipesByCategory($categoryId)
//     {
//         $response = Http::get('https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20170426', [
//             'applicationId' => $this->appId,
//             'categoryId' => $categoryId,
//         ]);

//         return $response->json();
//     }
// }
