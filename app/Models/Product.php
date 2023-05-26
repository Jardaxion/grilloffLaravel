<?php

namespace App\Models;

use App\Scopes\ProductScopes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use Sluggable;

    protected $guarded = [];

    protected $casts = [
        'properties' => 'json',
        'weight' => 'json',
        'collect_image' => 'json',
        'options' => 'json',
        'images' => 'array',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function Char(){
        return $this->hasMany(ProductChar::class);
    }



    public function categories()
    {
        return $this->belongsToMany(Category::class,'product_category');
    }

    public function setImagesAttribute($pictures)
    {

        $this->attributes['images'] = json_encode($pictures);
    }

    public function getImagesAttribute($img)
    {
        if($img){
            return  json_decode($img, true);
        }
       return [];
    }

    public function getTags(){
        $tags = explode(',',$this->tags);
        return !is_array($tags) ?:[];
    }



}
