<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->get('refresh-cash', function (){
        Artisan::call('config:cache');
        return redirect()->back();
    });

    $router->resource('promotion-categories', PromotionCategoryController::class);

    $router->resource('tree/category', TreeCategory::class);

    $router->resource('tree/category/create', TreeCategory::class);

    $router->resource('categories', CategoryController::class);

    $router->resource('promotions', PromotionController::class);

    $router->resource('orders', OrderController::class);

    $router->resource('pays', PayController::class);

    $router->resource('deliveries', DeliveryController::class);

    $router->resource('properties', PropertyController::class);

    $router->resource('questions', QuestionController::class);

    $router->resource('brands', BrandController::class);

    $router->resource('texts', TextController::class);

    $router->resource('products', ProductController::class);

    $router->resource('users/three', Tree::class);

    $router->resource('partners', PartnerController::class);

    $router->resource('contacts', ContactController::class);

    $router->resource('rubrics', RubricController::class);

    $router->resource('reviews', ReviewController::class);

    $router->resource('posts', PostController::class);

    $router->resource('posts/rubrics', RubricController::class);

    $router->resource('counters', CounterController::class);

    $router->resource('sliders', SliderController::class);

    $router->resource('pages',  PageController::class);

    $router->resource('users', UserController::class);

    $router->resource('transactions', TransactionController::class);
    
    $router->resource('our-clients', OurClientController::class);

    $router->resource('partners', PartnersController::class);

    $router->resource('cities', CitiesController::class);

    $router->resource('complects', ComplectsController::class);

    $router->resource('stocks', StocksController::class);

    $router->resource('popular-catalogs', PopularCatalogController::class);

    $router->resource('our-shops', OurShopController::class);


    /** Config */
    Route::get('admin-config', AdminConfigController::class.'@index');
    Route::post('admin-config', AdminConfigController::class.'@update');
    /** End Config */

    /** CHAT */
    Route::get('chat/messages/update/new-message',[\App\Admin\Controllers\SupportController::class,'updateNewMessage']);

    Route::get('chat/messages/update',[\App\Admin\Controllers\SupportController::class,'update']);

    Route::get('chat/messages',[\App\Admin\Controllers\SupportController::class,'messages']);

    Route::get('chat/messages/store',[\App\Admin\Controllers\SupportController::class,'store']);
    /** END CHAT */

    /** Menu */
    $router->resource('menu',  MenuController::class);
    $router->get('menu/{menu}',  [\App\Admin\Controllers\MenuContentController::class,'index'])
        ->name('menu-content');
    $router->post('menu/{menu}/create',  [\App\Admin\Controllers\MenuContentController::class,'create'])
        ->name('menu-content.create');
    $router->get('menu/{menu}/menu-item/{menuItem}/edit',  [\App\Admin\Controllers\MenuContentController::class,'edit'])
        ->name('menu-content.edit');
    $router->post('menu/{menu}/menu-item/{menuItem}/update',  [\App\Admin\Controllers\MenuContentController::class,'update'])
        ->name('menu-content.update');
    /** End Menu */


    /** Text editror */
    Route::get('text/ui/update',[\App\Admin\Controllers\TextController::class,'uiUpdated'])->name('text.ui.updated');
    /** End Menu */

});
