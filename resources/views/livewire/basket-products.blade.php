<div class="basket__products">
    @foreach($carts as $cart)
        @livewire('basket-product', ['cart' => $cart])
    @endforeach
</div>