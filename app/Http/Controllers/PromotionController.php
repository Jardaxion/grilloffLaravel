<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function __invoke(Promotion $promotion){
      return view('pages.stock',['promotion'=>$promotion]);
    }
}
