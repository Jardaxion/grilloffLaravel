<header class="header">
    <div class="container">
      <div class="header__inner desktop">
        <div class="header__top">
          @livewire('select-city')
          <div class="header__top-center">
            <ul class="header__top-nav">
              @foreach(Menu::get('verhnee-menyu-v-heder') as $menuItem)
                <li class="header__top-item">
                  <a class="header__top-link" {{$menuItem->parameters}} href="{{$menuItem->uri}}">{{$menuItem->title}}</a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="header__top-right">
            <a class="header__top-line" href="tel:{{remove_space(config('contacts.phone'))}}">
              <svg width="16" height="18" viewbox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.19593 12.0252C7.2774 16.262 11.1492 18.6974 12.8439 17.4648L14.8896 15.9769C15.3133 15.6688 15.4069 15.0755 15.0988 14.6519L13.239 12.0948C12.9308 11.6711 12.3376 11.5774 11.9139 11.8856L10.3796 13.0015C7.86904 11.2877 6.02911 8.75787 5.17215 5.84151L6.70642 4.72561C7.13009 4.41747 7.22375 3.82419 6.91562 3.40052L5.05581 0.843416C4.74768 0.419748 4.1544 0.326087 3.73073 0.634224L1.68508 2.12205C-0.00971884 3.35458 1.11446 7.78834 4.19593 12.0252Z" fill="#CC2929"></path>
              </svg>
              <p class="header__top-line--text">{{config('contacts.phone')}}</p>
            </a>
            <a class="header__top-line" href="{{config('socials.whatsapp')}}">
              <img src="{{asset('img/whatsapp.svg')}}" alt="">
              <p class="header__top-line--text green">Написать в Whatsapp</p>
            </a>
          </div>
        </div>
        <div class="header__middle">
          <a class="header__middle-left" href="{{route('main')}}">
            <img class="header__logo" src="{{asset('img/logo.svg')}}" alt="">
          </a>
          <x-pages.search />
          @livewire('basket-total')
        </div>
        <div class="header__bottom">
          <a class="button header__bottom-button" href="{{route('catalog')}}">Каталог товара</a>
          <ul class="header__bottom-list">
            @foreach(App\Models\Category::limit(8)->get() as $category)
              <li class="header__bottom-item">
                <a class="header__bottom-link" href="{{route('category', $category->slug)}}">{{$category->category}}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="header__inner mobile">
        <a class="header__left" href="{{route('main')}}">
          <img class="header__logo" src="{{asset('img/logoMobile.svg')}}" alt="">
        </a>
        <div class="header__right">
          <form class="headerMobile__search">
            <input class="headerMobile__search-input" type="text" name="search" placeholder="Поиск товаров">
            <button type="submit">
              <svg class="js-open-search" width="19" height="23" viewbox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="8.27415" cy="8.27415" r="7.67415" stroke="black" stroke-width="1.2"></circle>
                <path d="M13.0506 14.3735L18.2784 21.5186C18.4907 21.8087 18.4276 22.2159 18.1375 22.4282C17.8474 22.6405 17.4401 22.5773 17.2278 22.2872L12 15.1422L13.0506 14.3735Z" fill="black"></path>
              </svg>
            </button>
          </form>
          <a class="header__middle-right" href="{{route('basket')}}">
            <div class="header__middle-cart">
              <img class="header__middle-cart--img" src="{{asset('img/cart.svg')}}" alt="">
              @livewire('basket-total-mobile')
            </div></a>
          <div class="header__menuBtn"><span> </span><span> </span><span></span></div>
        </div>
      </div>
    </div>
    <div class="header__menu">
      <div class="header__menu-inner">
        <ul class="header__menu-list">
          @foreach(Menu::get('verhnee-menyu-v-heder') as $menuItem)
                <li class="header__menu-item">
                  <a class="header__menu-link" {{$menuItem->parameters}} href="{{$menuItem->uri}}">{{$menuItem->title}}</a>
                </li>
              @endforeach
        </ul>
        <div class="header__menu-box">
          @livewire('select-city')
          <a class="header__top-line" href="tel:{{remove_space(config('contacts.phone'))}}">
            <svg width="16" height="18" viewbox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.19593 12.0252C7.2774 16.262 11.1492 18.6974 12.8439 17.4648L14.8896 15.9769C15.3133 15.6688 15.4069 15.0755 15.0988 14.6519L13.239 12.0948C12.9308 11.6711 12.3376 11.5774 11.9139 11.8856L10.3796 13.0015C7.86904 11.2877 6.02911 8.75787 5.17215 5.84151L6.70642 4.72561C7.13009 4.41747 7.22375 3.82419 6.91562 3.40052L5.05581 0.843416C4.74768 0.419748 4.1544 0.326087 3.73073 0.634224L1.68508 2.12205C-0.00971884 3.35458 1.11446 7.78834 4.19593 12.0252Z" fill="#CC2929"></path>
            </svg>
            <p class="header__top-line--text">{{config('contacts.phone')}}</p></a>
        </div>
        <div class="whatsapp">
          <a class="whatsapp__inner" href="{{config('socials.whatsapp')}}">
            <img class="whatsapp__inner-img" src="{{asset('img/whatsapp.svg')}}" alt="">
          </a>
        </div>
      </div>
    </div>
</header>