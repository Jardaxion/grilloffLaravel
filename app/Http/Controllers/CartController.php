<?php

namespace App\Http\Controllers;
use App\Mail\OrderCartMail;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderContact;
use App\Models\OrderDelivery;
use App\Services\PayService;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Meta;

class CartController extends Controller
{
    public function index(){
        return view('pages.cart');
    }

    public function order(PayService $payService){

        $delivery = Delivery::find(request('delivery'));

        request()->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255|email',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|max:255',
            'floor' => 'required|max:255',
            'pay' => 'required',
            'delivery' => 'required',
            'delivery_date' => 'required',
            'delivery_time' => 'required',
        ]);

        $orderContact = OrderContact::create([
            'contacts' => [
                'Ф.И.О' => request('name'),
                'Телефон' => request('phone'),
                'Email' => request('email'),
                'Комментарий' => request('comment'),
            ]
        ]);

        $orderAddress = OrderAddress::create([
            'address' =>[
                'Адрес' => request('address'),
                'Город' => request('city'),
                'Улица' => request('street'),
                'Дом' => request('home'),
                'Частный дом' => request('house')?'Да':'Нет',
                'Корпус' => request('courpus'),
                'Подъезд' => request('door'),
                'Этаж' => request('floor'),
                'Квартира' => request('flat'),
                'Домофон' => request('intercom'),
            ],
        ]);

        $orderDelivery = OrderDelivery::create([
            'delivery' => $delivery->delivery,
            'total' => $delivery->price,
        ]);

        $total = \Cart::getTotal() + $delivery->price;

        $order = Order::create([
            'order_contact_id' => $orderContact->id,
            'delivery_order_id' => $orderDelivery->id,
            'order_address_id' => $orderAddress->id,
            'total' => $total,
            'total_cart' => \Cart::getTotal(),
        ]);

        foreach (\Cart::getContent() as $item){
            \App\Models\Cart::create([
                'cart' => $item,
                'order_id' => $order->id,
            ]);
        }

        Mail::to(explode(',',config('mails.to')))->send(new OrderCartMail($order));

        if(Auth::check()){
            $order->user_id = Auth::user()->id;
            $order->save();
        }

        if(request('pay') == 1){
            $url = $payService->pay($total,$order->id);
            return redirect($url);
        }

        \Darryldecode\Cart\Facades\CartFacade::clear();

        return redirect()->route('payment.complete');

    }


}




