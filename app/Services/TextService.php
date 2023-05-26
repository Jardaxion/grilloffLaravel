<?php

namespace App\Services;
use App\Models\Text;
use Illuminate\Support\Facades\Auth;

class TextService
{
    public $text;

   public function get($slug){

        $block = Text::where('slug',$slug)->first();

        if($block){
            if($block->textarea){
                $this->text = textarea_br($block->textarea);

//                if(Auth::guard('admin')->check()){
//                    $view = view('admin.text-helper',[
//                        'text' => $this->text,
//                        'block' => $block,
//                    ]);
//                    $this->text = $view->render();
//
//                }
            }

            if($block->image){
                $this->text = image($block->image);
            }


        }else{
            $this->text = null;
        }

        return $this->text;
   }
}
