<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        return view('pages.dashboard.home',['user'=>\Illuminate\Support\Facades\Auth::user()]);
    }

    public function show(Order $order){
        return view('pages.dashboard.order',[
            'order' => $order,
        ]);
    }
}
