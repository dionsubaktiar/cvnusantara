<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('data',DataController::class);
Route::get('sum',[DataController::class,'sum']);
Route::put('setlunas/{id}',[DataController::class,'setLunas']);
