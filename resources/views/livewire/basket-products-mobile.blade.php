<div class="basket__products-mobile">
    @foreach($carts as $cart)
        @livewire('basket-product-mobile', ['cart' => $cart])
    @endforeach
</div>