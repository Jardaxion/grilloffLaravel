<x-app-layout>
    <div class="profile">
        <div class="container">
            <div class="profile__block flex">
                @include('components.dashboard.sidebar')
                <div class="profile__poin poin">
                    <div class="profile__poin-title">Заказ № <span>{{ $order->id }}</span></div>
                    <div class="profile__poin-status">
                        <span>Статус заказа:</span>
                        <p class="">{{ $order->getStatus() }}</p>
                    </div>
                    <div class="poin__scroll scroll">
                        @foreach($order->carts as $cart)
                            @php $cart = $cart->cart @endphp
                        <div class="poin-item">
                            <div class="poin-item__l">
                                <a href="{{ $cart['attributes']['link'] }}">
                                    <img src="{{ image($cart['attributes']['image']) }}" alt="">
                                </a>
                            </div>
                            <div class="poin-item__r">
                                <div class="poin-item__header flex">
                                    <div class="poin-item__col _164">
                                        Наименование:
                                    </div>
                                    <div class="poin-item__col _186">
                                        Артикул:
                                    </div>
                                    <div class="poin-item__col _204">
                                        Количество:
                                    </div>
                                    <div class="poin-item__col _186">
                                        Цена за шт:
                                    </div>
                                    <div class="poin-item__col _151">
                                        Стоимость:
                                    </div>
                                </div>
                                <div class="poin-item__body flex">
                                    <div class="poin-item__col _164 _name">
                                        {{ $cart['name'] }}
                                    </div>
                                    <div class="poin-item__col _204">
                                        {{ $cart['attributes']['article'] }}
                                    </div>
                                    <div class="poin-item__col _186">
                                        {{ $cart['quantity'] }}
                                    </div>
                                    <div class="poin-item__col _151">
                                        {{ $cart['price'] }} Р
                                    </div>
                                    <div class="poin-item__col _85">
                                        {{ $cart['price']*$cart['quantity'] }} Р
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
