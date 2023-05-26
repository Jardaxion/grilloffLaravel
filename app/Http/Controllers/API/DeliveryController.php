<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Cart;

class DeliveryController extends Controller
{
    //
    public function price(){

        $delivery = Delivery::findOrFail(\request('delivery'));
        return $delivery->price;
    }

}
