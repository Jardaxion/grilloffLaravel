<div class="order-menu">
    <div class="order-menu__block">
        <div class="order-menu__title">Доставка</div>
        <div class="order-menu__list">
            @foreach(\App\Models\Delivery::all() as $delivery)
            <div class="order-menu__item">
                <input class="delivery"
                       value="{{ $delivery->id }}" @if($delivery->id == old('delivery'))  checked @endif
                       type="radio"
                       name="delivery">
                <div class="order-menu__label "></div>
                <label>{{ $delivery->delivery }}</label>
            </div>
            @endforeach
        </div>
{{--        <div class="order__row order__checkbox">--}}
{{--            <input value="Срочная доставка" type="checkbox">--}}
{{--            <label>Срочная доставка</label>--}}
{{--        </div>--}}
        <div class="order__row _datepicker">
            <input name="delivery_date" type="text">
            <label>Выбрать дату доставки<span>*</span></label>
            <div class="_datepicker--icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                        <path d="M2.03441 1.38763H19.9656C20.5254 1.38763 21.0341 1.60743 21.4027 1.96149C21.7712 2.31557 22 2.8043 22 3.34212V20.0455C22 20.5833 21.7712 21.072 21.4027 21.4261C21.0341 21.7802 20.5254 22 19.9656 22H2.03441C1.4746 22 0.96589 21.7802 0.59733 21.4261C0.228768 21.072 0 20.5833 0 20.0455V3.34212C0 2.8043 0.228769 2.31557 0.59733 1.96149C0.965875 1.60743 1.4746 1.38763 2.03441 1.38763ZM19.9656 2.07513H2.03441C1.67213 2.07513 1.34248 2.21779 1.10329 2.44758C0.864099 2.67737 0.715606 2.99407 0.715606 3.34212V20.0455C0.715606 20.3935 0.864099 20.7102 1.10329 20.94C1.34248 21.1698 1.67213 21.3125 2.03441 21.3125H19.9656C20.3279 21.3125 20.6575 21.1698 20.8967 20.94C21.1359 20.7102 21.2844 20.3935 21.2844 20.0455V3.34212C21.2844 2.99407 21.1359 2.67737 20.8967 2.44758C20.6575 2.21779 20.3279 2.07513 19.9656 2.07513Z" fill="#519938"/>
                        <path d="M0.35779 7.48559H21.6422V8.17309H0.35779V7.48559Z" fill="#519938"/>
                        <path d="M4.80788 0.34375C4.80788 0.153909 4.64767 0 4.45007 0C4.25247 0 4.09227 0.153909 4.09227 0.34375V3.56925C4.09227 3.75909 4.25247 3.913 4.45007 3.913C4.64767 3.913 4.80788 3.75909 4.80788 3.56925V0.34375Z" fill="#519938"/>
                        <path d="M17.9077 0.34375C17.9077 0.153909 17.7475 0 17.5499 0C17.3523 0 17.1921 0.153909 17.1921 0.34375V3.56925C17.1921 3.75909 17.3523 3.913 17.5499 3.913C17.7475 3.913 17.9077 3.75909 17.9077 3.56925V0.34375Z" fill="#519938"/>
                    </g>
                </svg>
            </div>
        </div>
        <div class="order__row">
            <input id="time_delivery" name="delivery_time" type="text">
            <label>Выбрать время доставки*</label>
        </div>
        @push('scripts')
            <script>
                IMask(document.getElementById('time_delivery'), {
                    mask: '00:00'
                });
            </script>
        @endpush
    </div>
</div>
