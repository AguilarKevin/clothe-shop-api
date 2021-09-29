<?php

use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\DiscountsController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class)->only(['index','show']);

Route::apiResource('collections', CollectionController::class)->only(['index','show']);

Route::apiResource('discounts', DiscountsController::class);

