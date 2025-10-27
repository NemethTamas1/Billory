<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OfferController;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("/offers", OfferController::class);

Route::apiResource("/items", ItemController::class);