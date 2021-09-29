<?php

use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\DiscountsController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::apiResource('products', ProductController::class)->only(['index','show']);

Route::apiResource('collections', CollectionController::class)->only(['index','show']);

Route::apiResource('discounts', DiscountsController::class);

Route::get('auth/google', [SocialiteController::class, 'redirectToProviderGoogle']);
Route::get('auth/google/callback', [SocialiteController::class, 'handleProviderCallbackGoogle']);

