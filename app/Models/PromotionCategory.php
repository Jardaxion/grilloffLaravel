<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionCategory extends Model
{
    use HasFactory;


    protected $casts = [
        'products' => 'array'
    ];

    public function getProducts(){
        return Product::whereIn('id',$this->products)->get();
    }
}
