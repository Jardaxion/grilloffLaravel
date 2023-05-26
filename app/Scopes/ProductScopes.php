<?php

namespace App\Scopes;


use App\Models\Category;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ProductScopes implements Scope
{

    public function apply(Builder $builder, Model $model)
    {

        if(!empty(request('categories'))){

        }

    }
}
