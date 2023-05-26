<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    //
    public function __invoke(){

        return view('pages.main');
    }
}
