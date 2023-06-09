<?php
use Illuminate\Support\Facades\Route;



Route::get('yandex-money/payment/status', [\App\Http\Controllers\PaymentController::class,'getPaymentStatus'])
    ->name('yandexmoneycheckout');

Route::get('payment/status', [\App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

Route::view('payment/status/message','commerce.payment-status')->name('payment.status.message');
