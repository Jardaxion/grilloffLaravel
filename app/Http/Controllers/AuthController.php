<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __invoke(){
        return view('pages.regOrLog');
    }

    public function loginPage(){
        return view('pages.login');
    }

    public function registerPage(){
        return view('pages.register');
    }
}
