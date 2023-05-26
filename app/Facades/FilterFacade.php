<?php


namespace App\Facades;

use App\Services\FilterService;
use Illuminate\Support\Facades\Facade;

class FilterFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FilterService::class;
    }
}
