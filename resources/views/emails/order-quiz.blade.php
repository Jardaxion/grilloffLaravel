@component('mail::message')
# Контактные данные

<p><strong>Имя</strong>:{{ $order['user']['name'] }}</p>
<p><strong>Телефон</strong>: {{ $order['user']['phone'] }}</p>

# Товары

@component('mail::table')
|    Картинка   | Название товара | Цена  |
| ------------- |:---------------:|--------:|
@foreach($order['items'] as $item)
| <img  width="100" src="{{ asset($item['img']) }}"> | {{ $item['name'] }} |  {{ $item['price'] }} |
@endforeach
@endcomponent

# Подарок

@component('mail::table')
|    Картинка   | Название товара |
| ------------- |:---------------:|
| <img width="100" src="{{ asset($order['present']['img']) }}"> | {{ $order['present']['name'] }} |
@endcomponent

@endcomponent
