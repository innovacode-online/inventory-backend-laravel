<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SaleController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/auth/user', function (Request $request) {
        return $request->user();
    });

    // AUTH
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/register', [AuthController::class, 'register']);
});

// CATEGORIES
// Route::post('/categories', [ CategoryController::class, 'store' ]);
Route::apiResource('/categories', CategoryController::class);


// PRODUCTS
Route::apiResource('/products', ProductController::class);


// AUTH
Route::post('/auth/login', [AuthController::class, 'login']);

// SALES
Route::apiResource('/sales', SaleController::class );
Route::apiResource('/upload', ImageController::class );
