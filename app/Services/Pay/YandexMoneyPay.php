<?php


namespace App\Services\Pay;

use App\Contracts\PayContract;
use App\Dependence\PayProcess;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;
use YooKassa\Client;
use YooKassa\Model\NotificationEventType;

class YandexMoneyPay extends PayProcess implements PayContract
{
    public $client;

    public $status;

    const status = [
        0 => 'pending',
        1 => 'waiting_for_capture',
        2 => 'succeeded',
    ];

    public function __construct()
    {
        $client = new Client();
        $this->client = $client->setAuth(
            config('yandex_money.shop_id'),
            config('yandex_money.shop_key')
        );
    }

    public function pay($total,$orderID){
        try {
        $response  = $this->client->createPayment(
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
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response = false;
        }

        if (!empty($response)) {

            Transaction::create([
                'order_id' => $orderID,
                'summa' => $total,
                'status' => $response->status,
                'hash' => $response->id,
            ]);

            return $response->getConfirmation()->getConfirmationUrl();
        }

        return $response;

    }

    /**
     * @param string $pauID
     * @return false|mixed|string
     *
     * Статус платежа может быть:
     * 'pending' - 'ожидает оплаты'
     * 'waiting_for_capture' - 'ожидает оплаты при согласие'
     * 'succeeded' - успешно проведен,
     * 'canceled' - отменен,
     */

    public function status(string $pauID)
    {
        try {
            $payment = $this->client->getPaymentInfo($pauID);

            $this->status = $payment->status?:false;

            return $this;

        }catch (\Exception $e){
            Log::error($e->getMessage());
           return false;
        }

    }

    public function getMessage(){
        switch ($this->status){
            case 'pending':
                return 'Заказ ожидает оплаты';
            case 'waiting_for_capture':
                return 'Заказ ожидает оплаты';
            case 'succeeded':
                return 'Успешно оплачен';
            case 'canceled':
                return 'Заказ отменен';
        }
    }

    public function addWebhook()
    {
        $response = $this->client->addWebhook([
            "event" => NotificationEventType::PAYMENT_SUCCEEDED,
            "url"   => "yandex-money/notification/succeeded",
        ]);
    }

}
