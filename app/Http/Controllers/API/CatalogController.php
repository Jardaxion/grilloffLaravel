<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    //
    public function __invoke(){
        $view = view('components.api.product-cart',[
            'products' => Product::CategoriesFilter()->categoryFilter()->get(),
        ]);

        return response()->json([
            'content' =>  $view->render()
        ]);
    }
}
