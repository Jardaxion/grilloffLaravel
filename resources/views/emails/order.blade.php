@component('mail::message')
# Контактные данные

<p><strong>ФИО</strong>:{{ $order['name'] }}</p>
<p><strong>Телефон</strong>: {{ $order['phone'] }}</p>
<p><strong>Email</strong>: {{ $order['email'] }}</p>
<p><strong>Комментарий</strong>: {{ $order['comment'] }}</p>

# Адресные данные

<p><strong>Адрес</strong>: {{ $order['address'] }}</p>
<p><strong>Город</strong>: {{ $order['city'] }}</p>
<p><strong>Улица</strong>: {{ $order['street'] }}</p>
<p><strong>Дом</strong>: {{ $order['home'] }}</p>
<p><strong>Тип постройки</strong>: {{ $order['isHome'] }}</p>

# Способ оплаты
<p><strong>Способ оплаты</strong>: {{ $order['payMethod'] }}</p>

@endcomponent
