<?php

use App\Http\Controllers\Api\ClotheController;
use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\DiscountsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('collections', CollectionController::class)->only(['index', 'show']);

Route::apiResource('collections/item', ClotheController::class);

Route::apiResource('clothe', ClotheController::class)->only(['show']);

Route::apiResource('clothes', ClotheController::class)->only(['index']);

Route::apiResource('discounts', DiscountsController::class);
