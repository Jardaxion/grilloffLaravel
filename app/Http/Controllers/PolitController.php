<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolitController extends Controller
{
    function __invoke(){
        return view('pages.text');
    }
}
