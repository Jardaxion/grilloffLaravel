<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function __invoke(Request $req){
        $products = Product::where('name', 'LIKE', '%'.$req->query('search').'%');
        $sort = '';

        if($req->query('sort') != null){
            $sort = $req->query('sort');
            
            if($sort == 'priceDesc'){
                $products = $products->orderBy('price', 'DESC');
            } else {
                $products = $products->orderBy($sort, 'ASC');
            }
        }

        $products = $products->paginate(12);

        return view('pages.search', [
            'products' => $products,
            'sort' => $sort,
            'req' => $req
        ]);
    }
}
