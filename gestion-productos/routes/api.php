<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Application\Controllers\ProductController;
use App\Application\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('products')->group(function () {
    Route::post('/', [ProductController::class, 'save']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::get('/', [ProductController::class, 'index']);
});

Route::prefix('categories')->group(function () {
    Route::post('/', [CategoryController::class, 'save']);
    Route::get('/', [CategoryController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
