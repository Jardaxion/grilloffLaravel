<x-app-layout>
    <div class="profile">
        <div class="container">
            <div class="profile__block flex">
                @include('components.dashboard.sidebar')
                <div class="profile__orders porders">
                    <div class="profile__title">Мои заказы</div>
                    <div class="porders__scroll scroll">
                        @foreach($user->orders as $order)
                        <div class="porders-item">
                            <div class="porders-item__order">
                                <span>Заказ</span> № {{ $order->id }}
                            </div>
                            <div class="porders-item__status">
                                <p>Статус заказа:</p>
                                <span>{{ $order->getStatus() }}</span>
                            </div>
                            <div class="porders-item__buttons">
                                <a href="{{ route('dashboard.order',$order) }}" class="btn-red">Подробнее</a>
                            </div>
                        </div>
                        @endforeach
                       @if($user->orders->count() <= 0)
                            У вас нет заказов перейдите в <a href="">каталог</a>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


