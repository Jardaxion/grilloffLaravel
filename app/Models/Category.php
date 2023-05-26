<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Support\Facades\DB;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Builder;
class Category extends Model
{
    //

    protected $guarded = [];

    use ModelTree, AdminBuilder;
    use Sluggable,SortableTrait;

    const STATUS = [
        1 => 'Активный',
        0 => 'Черновик'
    ];

    const PROMOTION_STATUS = [
        [
            'on'  => ['value' => 1, 'text' => 'Да', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Нет', 'color' => 'danger'],
        ]
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
                'source' => 'category'
            ]
        ];
    }

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeOrderSort(Builder $query){
        $query->orderBy('order','ASC');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_category');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

    public function parented()
    {
        return $this->hasOne(Category::class,'id','parent_id');
    }

    public function parents()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
