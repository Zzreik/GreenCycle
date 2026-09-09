<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TreeController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::get('/trees', [TreeController::class, 'index']);
Route::get('/trees/{tree}', [TreeController::class, 'show']);
Route::delete('/trees/{tree}', [TreeController::class, 'destroy']);
Route::post('/trees', [TreeController::class, 'store']);