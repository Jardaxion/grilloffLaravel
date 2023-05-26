<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HisotryController extends Controller
{
    public function __invoke(){
        return view('pages.history');
    }
}
