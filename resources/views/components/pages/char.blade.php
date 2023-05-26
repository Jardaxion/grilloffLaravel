<div class="char__content">
    @foreach(App\Models\ProductChar::where('product_id', $product->id)->get() as $char)
        <div class="char__char">
            <p class="char__char-title">{{$char->title}}</p>
            <p class="char__char-val">{{$char->char}}</p>
        </div>
    @endforeach
</div>