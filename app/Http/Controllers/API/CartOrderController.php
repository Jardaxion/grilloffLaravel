<?php

namespace App\Http\Controllers\API;

use App\Mail\OrderCartMail;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderContact;
use App\Models\OrderDelivery;
use App\Services\OrderService;
use App\Services\PayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartOrderController
{
    //
    public function __invoke(Request $request,PayService $payService){

        $data = $request->validate([
            'phone' => 'required|max:255',
            'email' => 'required|max:255|email',
            'address' => 'required',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'home' => 'required|max:255',
            'floor' => 'required|max:255',
            'flat' => 'required|max:255',
            'delivery' => 'required',
            'payment' => 'required',
        ]);

        $delivery = Delivery::find(request('delivery'));

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

        \Darryldecode\Cart\Facades\CartFacade::clear();

        if($request->payment == 1){
           return response()->json([
               'status' => 1,
               'content' => $payService->pay($order->total,$order->id)
           ]);
        }

        return response()->json([
            'status' => 1,
            'content' => route('payment.status.message',[
                'message'=>'Заявка успешно отправлена'
            ]),
        ]);
    }
}
