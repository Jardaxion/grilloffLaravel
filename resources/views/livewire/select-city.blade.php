<div class="header__top-left">
    <p class="header__top-text">Город:</p>
    <a class="header__top-select js-select-city" href="#">
      <span class="header__top-text red">{{$city}}</span>
      <div class="header__top-arrow">
        <svg width="10" height="6" viewbox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </div>
    </a>
    <div class="header__select js-select">
        @foreach(\App\Models\Cities::get() as $city)
            <a class="header__select-option js-select-option" href="" wire:key="`{{$city->id}}`" wire:click.prevent="selectCity(`{{$city->city}}`)">{{$city->city}}</a>
        @endforeach
    </div>
</div>