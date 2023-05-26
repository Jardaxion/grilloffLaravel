@if($total != 0)
    <div class="basket__content">
        @livewire('basket-products')
        @livewire('basket-products-mobile')
        @livewire('basket-form')
    </div>
@else
    <p>Пока вы не добавили ни одного товара</p>
@endif