<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function __invoke(){
        $products = Product::whereIn('id',session('favorites',[]))->get();
        return view('pages.favorite',[
            'products'=>$products,
        ]);
    }
}
