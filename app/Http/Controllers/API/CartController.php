<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    public function total(){
        return response()->json([
            'count' => Cart::getTotalQuantity(),
            'total' => Cart::getTotal()
        ]);
    }

    public function add()
    {
        $product = Product::find(\request('product'));

        Cart::add(array(
            'id' => $product->id,
            'slug' => $product->slug,
            'name' => $product->name,
            'price' => $product->price,
            'article' => $product->article,
            'quantity' => 1,
            'attributes' => [
                'image' => $product->image,
                'price_sale' => $product->price_sale?:0,
                'link' => $product->slug,
                'article' => $product->article
            ],
            'associatedModel' => $product
        ));

        return response()->json([
            'product' => $product,
            'status' => 1,
        ]);

    }

    public function updateItem(){
       return Cart::get(\request('product'));
    }

    public function update(){
        try {
            Cart::update(\request('product'), [
                'quantity' => [
                    'relative' => false,
                    'value' =>  \request('qtu'),
                ]
            ]);
        }catch (\Error $e){
            Log::info($e);
            return response()->json([
                'errors' => $e,
                'status' => 0,
            ]);
        }

        return response()->json([
            'status' => 1,
            'product' => Cart::get(\request('product')),
        ]);
    }

    public function destroy(){
        Cart::remove(request('product'));
        return response()->json([
            'status' => 1,
        ]);
    }
}
