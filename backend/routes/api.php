<?php

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/test', function () {
    return response()->json([
        'message' => 'Helló React, itt a Laravel PHP backend.'
    ]);
});

Route::get('/tests', function () {
    $tests = Test::all();
    return response()->json($tests);
});
