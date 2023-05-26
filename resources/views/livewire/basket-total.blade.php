<a class="header__middle-right" href="{{route('basket')}}">
    <div class="header__middle-cart">
        <img class="header__middle-cart--img" src="{{asset('img/cart.svg')}}" alt="">
        <p class="header__middle-cart--text">{{ $total }}</p>
    </div>
    <p class="header__middle-text">Корзина товаров</p>
</a>