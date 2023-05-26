<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Arr;

class FavoriteController
{

    public function index(Favorite $favoriteService)
    {
        return view('favorites',['slug'=>'Избранное','products'=>$favoriteService->get()]);
    }

    public function add()
    {
        $favorites = session('favorites');
        $data = \request('product_id');

        if(is_null(session('favorites'))){
            session([
                'favorites'=> [$data]
            ]);
        }else{
            $key = array_search($data,$favorites);
            if($key === false){
                $favorites[]=$data;
            }else{
                unset($favorites[$key]);
            }

            session(['favorites' => $favorites]);
        }
        return  count(session('favorites'));
    }

    public function delete($id){
        $favorites = session('favorites');
        $key = array_search($id,$favorites);
        unset($favorites[$key]);
        session(['favorites' => $favorites]);
        session()->flash('message','Товар успешно удален');
        return back();
    }
}
