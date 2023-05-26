<div class="basket__product" data-product="{{$cart['id']}}">
    <div class="basket__product-left">
        <button class="basket__product-closeButton" wire:click.prevent="clear">
            <svg class="basket__product-close js-clear-basketItem" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1.52344" width="22.949" height="2.15147" rx="1.07574" transform="rotate(45 1.52344 0)" fill="#585858"></rect>
                <rect y="16.2275" width="22.949" height="2.15147" rx="1.07574" transform="rotate(-45 0 16.2275)" fill="#585858"></rect>
            </svg>
        </button>
        <table class="basket__product-right">
            <thead class="basket__product-top">
                <tr>
                    <td>Наименование:</td>
                    <td>Артикул:</td>
                    <td>Количество:</td>
                    <td>Цена за шт:</td>
                    <td>Стоимость:</td>
                </tr>
            </thead>
            <tbody class="basket__product-bottom">
                <tr>
                    <td class="basket__name">{{$cart['associatedModel']['name']}}</td>
                    <td class="basket__article">{{$cart['associatedModel']['article']}}</td>
                    <td class="basket__buttons">
                        <button class="basket__minus" wire:click.prevent="minus()"><img src="img/basket/basketMinus.svg" alt=""></button>
                        <input class="basket__price" type="text" wire:model="countProduct" disabled >
                        <button class="basket__plus" wire:click.prevent="plus()"><img src="img/basket/basketPlus.svg" alt=""></button>
                    </td>
                    <td class="basket__price">{{$cart['price']}} руб</td>
                    <td class="basket__price">{{$fullPrice}} руб</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>