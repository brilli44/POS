<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
});

Route::get('/FoodBeverage', [ProductController::class, 'FoodBeverage']);
Route::get('/home-care', [ProductController::class, 'HomeCare']);
Route::get('/beauty-health', [ProductController::class, 'BeautyHealth']);
Route::get('/baby-kid', [ProductController::class, 'BabyKid']);

Route::get('/user/{id}/{name}', [UserController::class, 'User']);

// Sales Route
Route::get('/sales', [SalesController::class, 'showSales']);




