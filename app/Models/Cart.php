<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public $guarded = [];

    protected $casts = [
        'cart' => 'array',
    ];
//    public function add($item, $id){
//        $storedItem = [
//            'qty' => 0,
//            'id' => $item->id,
//            'prod_url' => $item->url,
//            'code_cat' => $item->category->code,
//            'url_cat' => $item->category->url,
//            'name' => $item->name,
//            'cost' => $item->price,
//            'price' => $item->price,
//            'img' => $item->cardImage->path
//        ];
//        if($this->items){
//            if(array_key_exists($id, $this->items)){
//                $storedItem = $this->items[$id];
//            }
//        }
//        $storedItem['qty']++;
//        $storedItem['cost'] = $item->price * $storedItem['qty'];
//        $this->items[$id] = $storedItem;
//        $this->totalQty++;
//        $this->totalPrice += $item->price;
//    }

}
