<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ParentCategory extends Controller
{
    //
    public function __invoke(Category $category, $categoryParent){
        $categoryParent = Category::where('slug',$categoryParent)->firstOrFail();
        $parentCategories = $category->parents;
        $products = $categoryParent->products;
        return view('pages.parent-category',compact('category','categoryParent','parentCategories','products'));
    }
}
