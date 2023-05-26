<?php


namespace App\Services;
use App\Models\Order;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class OrderService
{

    public $order;

    public function __construct($data)
    {
        $order = new Order();
        $order->order = json_encode($data);
        $order->total = Cart::getTotal();
        $order->save();
        $this->order = $order;

        $this->addBasket();
    }

    private function addBasket(){
        foreach (Cart::getContent() as $cartCollection){
            $basket = new \App\Models\Cart();
            $basket->cart = $cartCollection;
            $basket->order_id = $this->order->id;
            $basket->save();
        }
    }
}

