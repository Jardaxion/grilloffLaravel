@component('mail::message')
@if($order->contacts)
# Контактные данные
@foreach($order->contacts->contacts as $key=>$value)
<p><strong>{{ $key }}</strong>:{{ $value }}</p>
@endforeach
@endif



@if($order->address)
# Адрес доставки
@foreach($order->address->address as $key=>$value)
<p><strong>{{ $key }}</strong>:{{ $value }}</p>
@endforeach
@endif



@if($order->delivery)
# Доставка
<p><strong>{{ $order->delivery->delivery }}</strong>: Цена:{{  $order->delivery->total }} Р</p>
@endif



# Товары
@component('mail::table')

|    Картинка    |  Наименование   | Цена   |
| --------------:| ---------------:|---------------:|
@foreach($order->carts as $cart)
| <img  width="100" src="{{ asset(image($cart->cart['attributes']['image'])) }}"> | {{ $cart->cart['name'] }} |  {{ $cart->cart['price'] }} |
@endforeach
@endcomponent
@endcomponent
