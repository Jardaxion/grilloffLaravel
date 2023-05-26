@props([
    'product' => ''
])

<a class="products__product swiper-slide" href="{{route('product', $product->slug)}}">
    <img class="product__img" src="{{image($product->image)}}" alt=""/>
    <p class="product__title">{{$product->name}}</p>
    <div class="product__line">
        <div class="product__prices">
            @if($product->oldPrice)
                <p class="product__oldPrice">{{$product->oldPrice}} Руб.</p>
            @endif
            <p class="product__price">{{$product->price}} Руб.</p>
        </div>
        @livewire('btn-product-buy', ['product' => $product])
    </div>
</a>