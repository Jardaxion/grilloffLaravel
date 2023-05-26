<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilterScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (request('characteristic') != null){
            $builder->whereHas('characteristics', function ($query) {
                $query->where('characteristic_id',request('characteristic'));
            });
        }

        if (empty(request('sort'))){
            $builder->orderBy('price', 'DESC');
        }else{
            $builder->orderBy('price', 'ASC');
        }

        dd(request('start_price'));


    }
}
