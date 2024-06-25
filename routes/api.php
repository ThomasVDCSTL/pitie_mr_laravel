<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;

//Route::apiResource('artisans', ArtisanController::class);
//Route::apiResource('produits', ProductController::class);
//Route::apiResource('users', UsersController::class);
//Route::apiResource('panier', OrdersController::class);

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
    ->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('user',[UserAuthController::class,'getUser']);
    Route::get('users', [UsersController::class, 'index']);
    Route::put('users/{user}', [UsersController::class, 'update']);
    Route::delete('users/{user}', [UsersController::class, 'destroy']);
    Route::put('products', [ProductController::class, 'update']);
    Route::post('products', [ProductController::class, 'store']);
    Route::delete('products', [ProductController::class, 'destroy']);
    Route::apiResource('panier', OrdersController::class);
    Route::post('add-to-cart', [OrdersController::class, 'addToCart']);

});

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::get('users/{user}', [UsersController::class, 'show']);
Route::get('artisans/{artisan}', [ArtisanController::class, 'show']);
Route::get('artisans', [UsersController::class, 'indexArtisans']);
Route::get('artisan_products/{artisan}', [ProductController::class, 'indexByArtisan']);
