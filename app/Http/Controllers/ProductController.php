<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __invoke($product){
        $product = Product::where('slug', '=', $product)->get()[0];

        $catalog = $product->categories[0]->id;
        
        if($product->catalogBottom){
            $catalog = Category::where('id', $product->catalogBottom)->value('id');
        }

        return view('pages.product',[
            'product' => $product,
            'catalog' => $catalog
        ]);
    }
}
