<?php
$delivery = 0;
if(old('delivery')){
    $delivery = \App\Models\Delivery::find(old('delivery'))->price;
}
$total = Cart::getTotal();
if($delivery != 0){
    $total +=$delivery;
}
?>
<div class="total__l flex acenter">
    <div class="total__item">
        <p>Доставка:</p>
        <p><span class="delivery_price">{{ $delivery }}</span> <i class="_currency">руб.</i>
        </p>
    </div>
{{--    <div class="total__item">--}}
{{--        <p>Delivery:</p>--}}
{{--        <p>5374 <i class="_currency">руб.</i></p>--}}
{{--    </div>--}}
    <div class="total__item">
        <p>Всего:</p>
        <p>
            <span class="cart-total">{{  $total }}</span>
            <i class="_currency">руб.</i>
        </p>
    </div>
</div>
