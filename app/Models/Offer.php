<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
//    use Sluggable;

    const PARAMS_NAME = [
        'name' => 'Размер'
    ];
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class,'offer_product','product_id','offer_id');
    }
}
