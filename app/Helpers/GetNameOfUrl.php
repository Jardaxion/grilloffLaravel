<?php
    function getNameOfUrl(){
        return app('router')->getRoutes()->match(app('request')->create(redirect()->back()->getTargetUrl()))->getName();
    }