<?php


namespace App\Contracts;

interface PayContract
{
    /**
     * @param $total
     * @param $orderID
     * @return mixed
     */
    public function pay($total, $orderID);

    /**
     * @param string $transaction_token
     * @return mixed
     */
    public function status(string $transaction_token);
}
