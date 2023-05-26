<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

                        /** Admin */
Route::post('menu/{menuItem}/menu-item/update',[\App\Admin\Controllers\API\MenuContentController::class,'update'])
    ->name('api.menu-item.update');

Route::get('menu-item/{menuItem}/delete',[\App\Admin\Controllers\API\MenuContentController::class,'delete'])
    ->name('api.menu-item.delete');
                    /** End Admin */

Route::get('update', [\App\Http\Controllers\API\CartController::class, 'update'])
    ->name('api.cart-update');

Route::post('cart/add',[\App\Http\Controllers\API\CartController::class,'add']);

Route::post('cart/update',[\App\Http\Controllers\API\CartController::class,'update']);

Route::post('cart/update/item',[\App\Http\Controllers\API\CartController::class,'updateItem']);

Route::get('cart/delete',[\App\Http\Controllers\API\CartController::class,'destroy']);

Route::post('cart/total',[\App\Http\Controllers\API\CartController::class,'total']);

Route::get('delivery/price',[\App\Http\Controllers\API\DeliveryController::class,'price']);

Route::get('cart/order',\App\Http\Controllers\API\CartOrderController::class);

//Route::get('order',\App\Http\Controllers\API\OrderController::class)->name('api.order');
//
//Route::get('catalog',\App\Http\Controllers\API\CatalogController::class)->name('api.catalog');
//
//Route::get('cart',\App\Http\Controllers\API\CartController::class)->name('api.cart');


//Route::get('favorites/add',[\App\Http\Controllers\API\FavoriteController::class,'add'])->name('api.favorites.add');
//
//Route::get('delivery/{delivery}/price',[\App\Http\Controllers\API\DeliveryController::class,'price'])->name('api.delivery.price');


