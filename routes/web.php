<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAuthenticate;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\UnAuthenticate;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/market', [MarketController::class, 'index']);
Route::get('/market/{id}', [MarketController::class, 'byId']);


Route::middleware(UnAuthenticate::class)->group(function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);
});
Route::middleware(Authenticate::class)->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/chart/{id}', [UserController::class, 'chart']);
    Route::post('/market/buy/', [MarketController::class, 'buyProduct']);
    Route::post('/chart/remove', [UserController::class, 'removeChart']);
});
Route::middleware(AdminAuthenticate::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/product-dashboard', [DashboardController::class, 'product']);
    Route::get('/product-dashboard/tambah', [ProductController::class, 'index']);
    Route::post('/product-dashboard/tambah', [ProductController::class, 'sentData']);
});
