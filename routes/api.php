<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('api.categories.edit');
Route::post('categories', [CategoryController::class, 'store'])->name('api.categories.store');

// Дополнительный маршрут для метода update в CategoryController
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('api.categories.update');

// Маршрут для создания новой категории через POST-запрос
Route::post('categories', [CategoryController::class, 'store'])->name('api.categories.store');

Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('api.categories.destroy');
