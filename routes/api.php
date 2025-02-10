<?php

use App\Http\Controllers\Api\ApiTaskController;
use App\Http\Controllers\ProdcutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Api Route

Route::get('/tasks/{sort?}/{filter?}/{page?}', [App\Http\Controllers\Api\ApiTaskController::class, 'index'])->middleware('throttle:customeRateLimit');

Route::post('get/products/', [ProdcutController::class, 'index']);


