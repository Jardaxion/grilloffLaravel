<?php


namespace App\Services;
use App\Models\Transaction;
use YooKassa\Client;
use YooKassa\Model\NotificationEventType;

class PayService
{
    public $client;

    public function __construct()
    {
        $client = new Client();
        $this->client = $client->setAuth(config('yandex_money.shop_id'), config('yandex_money.shop_key'));
    }

    public function pay($total,$orderID){

        $payment = $this->client->createPayment(
            array(
                'amount' => array(
                    'value' => $total,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url'=> route('yandexmoneycheckout',['order_id' => $orderID]) ,
                ),
                'capture' => true,
                'description' => 'Заказ №'.$orderID,
            ),
            uniqid('', true)
        );

        Transaction::create([
            'order_id' => $orderID,
            'summa' => $total,
            'status' => $payment->status,
            'hash' => $payment->id,
        ]);

        return $payment->getConfirmation()->getConfirmationUrl();

    }


    public function status(string $pauID)
    {
        $payment = $this->client->getPaymentInfo($pauID);

        return $payment->status?$payment->status:null;
    }

    public function addWebhook()
    {
        $response = $this->client->addWebhook([
            "event" => NotificationEventType::PAYMENT_SUCCEEDED,
            "url"   => "yandex-money/notification/succeeded",
        ]);
    }

}
