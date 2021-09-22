<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\DiscountsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class)->only(['index','show']);

Route::apiResource('discounts', DiscountsController::class);
