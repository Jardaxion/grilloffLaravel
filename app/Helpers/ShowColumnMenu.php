<?php
    function showColumnMenu($name){
        return App\Models\Menu::where('id', Menu::get($name)[0]->menu_id)->value('name');
    }