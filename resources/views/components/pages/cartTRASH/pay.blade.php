<div class="order__payment flex acenter">
    <div class="order__title order__payment-title">Способ оплаты</div>
    <div class="order-menu__list flex acenter">
        @foreach(\App\Models\Pay::all() as $pay)
        <div class="order-menu__item">
            <input value="{{ $pay->id }}"
                   @if(old('pay') == $pay->id) checked @endif type="radio" name="pay">
            <div class="order-menu__label"></div>
            <label>{{ $pay->pay }}</label>
        </div>
        @endforeach
    </div>
</div>
