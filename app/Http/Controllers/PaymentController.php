<?php

namespace App\Http\Controllers;

use App\Contracts\PayContract;
use App\Models\Order;


class PaymentController extends Controller
{

    public $order;

    public $transaction;

    public $status;

    public function __construct()
    {
        $this->order = Order::findOrFail(\request('order_id'));

        if(is_null($this->order)){
            return abort(403,'Произошла непредвиденная ошибка');
        }

        $this->transaction = $this->order->transaction;
    }

    public function getPaymentStatus(PayContract $payContract)
    {
        $payContract = $payContract->status($this->transaction->hash);

        if($this->status){
            $this->transaction->update([
                'status' => $this->status
            ]);
        }

        return redirect()->route('payment.status.message',[
            'message' => $payContract->getMessage()
        ]);
    }


}
