<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',\App\Http\Controllers\MainController::class)
    ->name('main');

Route::prefix('basket')->group(function () {
    Route::get('/', \App\Http\Controllers\BasketController::class)->name('basket');
});

Route::prefix('catalog')->group(function () {
    Route::get('/', \App\Http\Controllers\CatalogController::class)->name('catalog');

    Route::get('/{category}', \App\Http\Controllers\CategoryController::class)
        ->name('category');
});

Route::get('/product/{product}', \App\Http\Controllers\ProductController::class)
    ->name('product');

Route::get('/search', \App\Http\Controllers\SearchController::class)->name('search');

Route::get('/polit', \App\Http\Controllers\PolitController::class)->name('polit');

require __DIR__.'/auth.php';

require __DIR__.'/commerce.php';


