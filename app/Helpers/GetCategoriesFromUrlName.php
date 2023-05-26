<?php
    use App\Models\Category;
    function getCategoriesFromUrlName($url){
        $path= parse_url($url, PHP_URL_PATH);

        $result = explode("/", trim($path, "/"))[1];

        $result = Category::where('slug', $result)->value('category');

        return $result;
    }