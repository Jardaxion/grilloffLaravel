<div class="basket__product mobile" data-product="{{$cart['id']}}">
    <div class="basket__product-top">
        <div class="basket__product-left">
            <p class="basket__product-title">{{$cart['associatedModel']['name']}}</p>
            <p class="basket__product-art">Арт: {{$cart['associatedModel']['article']}}</p>
        </div>
        <div class="basket__product-close" wire:click.prevent="clear"><img class="basket__product-close" src="img/close.svg" alt=""></div>
    </div>
    <hr class="basket__product-hr">
    <div class="basket__product-bot">
    <div class="basket__product-box">
        <p class="basket__product-box--title">Количество</p>
        <div class="buttons__row">
            <a class="minus product__minus" href="#" wire:click.prevent="minus()">
                <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <input class="number product__number" wire:model="countProduct" disabled>
            <a class="plus product__plus" href="" wire:click.prevent="plus()">
                <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="basket__product-box">
        <p class="basket__product-box--title">Цена за 1 шт</p>
        <p class="basket__product-price">{{$cart['price']}} руб.</p>
    </div>
    <div class="basket__product-box">
        <p class="basket__product-box--title">Стоимость</p>
        <p class="basket__product-price">{{$fullPrice}} руб.</p>
    </div>
    </div>
</div>