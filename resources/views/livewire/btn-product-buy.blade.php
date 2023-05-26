<div class="buttons @if($isActive) active @endif">
    <button class="button product__button" href="#" wire:click.prevent="add">Купить</button>
    <div class="buttons__row" wire:click.prevent>
        <button class="minus product__minus" href="#" wire:click.prevent="minus">
            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <input class="number product__number" wire:model="countProductInput" disabled/>
        <button class="plus product__plus" href="" wire:click.prevent="plus">
            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
</div>
