<?php

use App\Http\Controllers\API\HeroController;
use App\Http\Controllers\API\TrendingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/heroes', [HeroController::class, 'index']);
Route::get('trendings', [TrendingController::class, 'index']);
