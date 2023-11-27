<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;


Route::get('/products', [ProductController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
