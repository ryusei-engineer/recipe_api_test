<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TopController::class,'index'])->name('index');

Route::get('/recipes', [RecipeController::class, 'index']);

Route::post('/recipes', [RecipeController::class, 'add'])->name('add');

