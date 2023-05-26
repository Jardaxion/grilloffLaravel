<a class="block__catalog-item catalogBlock__item" href="{{ route('product',$product->slug) }}">
    @if($product->is_new)
    <p class="block__catalog-tag catalogBlock__tag">new</p>
    @endif
    <img class="block__catalog-img catalogBlock__img" src="{{ image($product->image) }}" alt=""/>
    <img class="block__catalog-img catalogBlock__img" src="{{ image($product->image) }}" alt=""/>
    <p class="block__catalog-title catalogBlock__title">{{ $product->name }}</p>
    <hr class="block__catalog-hr catalogBlock__hr"/>
    <div class="block__catalog-line catalogBlock__line">
        <p class="block__catalog-g catalogBlock__g">
            @foreach($product->weight as $weight)
                <span @if(($loop->iteration%2)==0) class="grey" @endif>
                    {{ $weight }} гр.
                </span>
            @endforeach
        </p>
        <p class="block__catalog-code catalogBlock__code">{{ $product->price }};</p>
    </div>
    <livewire:btn-bay :product="$product"/>
</a>
