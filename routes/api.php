<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::options('{any}', function () {
    return response()->json([], 204, [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
    ]);
})->where('any', '.*');

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('data',DataController::class);
Route::get('sum',[DataController::class,'sum']);
Route::put('setlunas/{id}',[DataController::class,'setLunas']);
Route::post('/pin-verify', [DataController::class, 'pinVerified']);
Route::post('/lockscreen', [DataController::class, 'lockscreen']);
