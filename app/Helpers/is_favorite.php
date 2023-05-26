<?php

function is_favorite($PRODUCT_ID)
{
    $key = array_search($PRODUCT_ID,session('favorites')?:[]);
    if($key === false){
        return false;
    }
    return true;
}
