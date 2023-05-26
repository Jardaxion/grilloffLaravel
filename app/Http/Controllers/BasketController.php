<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class BasketController extends Controller
{
//
   public function __invoke(){
       return view('pages.basket');
   }
//    public function show_regBasket(){
//        return view('pages.regOrLoginBasket');
//    }
//
//    public function show_basketBuy(){
//        return view('pages.basketBuy');
//    }

    public function add(Product $product)
    {




    }

}
