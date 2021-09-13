<?php

use App\Http\Controllers\Api\ClotheController;
use App\Http\Controllers\Api\CollectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('collections', CollectionController::class);

Route::apiResource('collections/clothe', ClotheController::class);
