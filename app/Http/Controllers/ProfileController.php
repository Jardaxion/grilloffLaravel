<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(){
        return view('pages.profile');
    }

    public function showHistory(){
        return view('pages.profileHistory');
    }

    public function showSettings(){
        return view('pages.settings');
    }

    public function showHistoryOne(){
        return view('pages.profileHistoryOne');
    }
}
