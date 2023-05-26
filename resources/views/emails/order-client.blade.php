@component('mail::message')
# Контактные данные
<p><strong>ФИО: </strong>:{{ $all['order']['name'] }}</p>
<p><strong>Телефон: </strong>:{{ $all['order']['phone'] }}</p>
<p><strong>Email: </strong>:{{ $all['order']['email'] }}</p>


# Адрес доставки
<p><strong>Адрес</strong>:г. {{ $all['order']['city'] }}, {{$all['order']['street']}}, {{$all['order']['home']}}</p>



# Товары
@component('mail::table')

|    Картинка    |  Наименование   | Цена   |
| --------------:| ---------------:|---------------:|
@foreach($all['carts'] as $cart)
| <img  width="100" src="{{ asset(image($cart->cart['attributes']['image'])) }}"> | {{ $cart->cart['name'] }} |  {{ $cart->cart['price'] }} |
@endforeach
@endcomponent

# Контактные данные администарции
<p><strong>Телефон: </strong>:{{ config('contacts.phone') }}</p>
<p><strong>Email: </strong>:{{ config('contacts.email') }}</p>
@endcomponent
