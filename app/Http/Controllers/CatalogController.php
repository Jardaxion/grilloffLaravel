<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CatalogController extends Controller
{
    //
    public function __invoke(){
        // $categories = Category::where('parent_id',0)->orderBy('order','ASC')->get();
        return view('pages.catalog');
    }

    public function category($category){
        return view('pages.catalogInner', ['category' => $category]);
    }

}
