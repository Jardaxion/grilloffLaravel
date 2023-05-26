<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __invoke(Request $req, Category $category){
        $products = $category->products();
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

        return view('pages.catalogInner',[
            'category' => $category,
            'products' => $products,
            'sort' => $sort,
        ]);
    }
}
