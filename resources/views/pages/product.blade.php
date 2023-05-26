<x-app-layout>
    <main class="main">
        <section class="product">
          <div class="container">
            <div class="product__inner">
              <div class="product__nav navigationSalt">
                <a class="product__nav-link navigationSalt__link" href="{{route('main')}}">Главная /</a>
                <a class="product__nav-link navigationSalt__link" href="{{route('catalog')}}">Каталог /</a>
                @if(getNameOfUrl() == 'category')
                  <a class="product__nav-link navigationSalt__link" href="{{Redirect::back()->getTargetUrl()}}">{{getCategoriesFromUrlName(Redirect::back()->getTargetUrl())}} /</a>
                @endif
                <p class="product__nav-noLink navigationSalt__text">{{$product->name}}</p>
              </div>
              <div class="product__content">
                <div class="product__content-left">
                  <div class="product__slider-nav swiper">
                    <div class="product__slider-nav--slider swiper-pagination swiper-wrapper"></div>
                  </div>
                  <div class="product__slider-wrp swiper">
                    <div class="swiper-wrapper product__slider">
                      @foreach($product->images as $image)
                        <div class="product__slider-img-wrp swiper-slide">
                          <img class="product__slider-img" src="{{image($image)}}" alt="">
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="product__content-right">
                  <p class="title productPage__title">{{$product->name}}</p>
                  <p class="product__subtitle">Артикул: {{$product->article}}</p>
                  <div class="product__description">{!! $product->description !!}</div>
                  <!-- класс green - для зеленого, red - для красного прудпреждения -->
                  <p class="product__isAvaible {{$product->isAviable == 1 ? 'green' : 'red'}}">{{$product->isAviable == 1 ? 'В наличии' : 'Отсутствует'}}</p>
                  <div class="productPage__line">
                    <div class="productPage__prices">
                      @if($product->oldPrice)
                        <p class="productPage__oldPrice">{{$product->oldPrice}} Руб.</p>
                      @endif
                      <p class="productPage__price">{{$product->price}} Руб.</p>
                    </div>
                    @livewire('buy-button-product-page', ['product' => $product])
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="infoDeliv">
          <div class="container">
            <div class="infoDeliv__inner">
              <p class="title infoDeliv__title">Информация о доставке</p>
              <hr class="infoDeliv__hr">
              <div class="infoDeliv__line">
                <p class="infoDeliv__line-title">Доставка курьером - от 299 Руб</p>
                <p class="infoDeliv__line-days">2-5 дней</p>
              </div>
              <div class="infoDeliv__line">
                <p class="infoDeliv__line-title">До магазина <a class="infoDeliv__line-link" href="#">из списка</a>бесплатно</p>
                <p class="infoDeliv__line-days">1-3 дня </p>
              </div>
            </div>
          </div>
        </section>
        <section class="change">
          <div class="container">
            <div class="change__inner">
              <div class="change__top">
                <p class="change__select selected" data-sel="des">Описание</p>
                <p class="change__select" data-sel="char">Характеристики</p>
              </div>
              <div class="change__bottom">
                <div class="change__box active" data-sel="des">
                  <div class="change__description">{!! $product->description !!}</div>
                </div>
                <div class="change__box" data-sel="char">
                  <div class="change__char">
                    <x-pages.char :product="$product"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="char">
          <div class="container">
            <div class="char__inner">
              <p class="title char__title">Характеристики</p>
              <x-pages.char :product="$product"/>
            </div>
          </div>
        </section>
        {{--<section class="products">
          <div class="container">
            <div class="products__inner">
              <div class="products__top">
                <p class="title products__title">Товары к зиме</p>
              </div>
              <div class="products__content-wrp swiper">
                <div class="products__content-slider swiper-wrapper">
                  <div class="products__product swiper-slide"><img class="product__img" src="img/products/1.png" alt=""/>
                    <p class="product__title">Чугунный казан 8 литров</p>
                    <div class="product__line">
                      <div class="product__prices">
                        <p class="product__oldPrice">2690 Руб.</p>
                        <p class="product__price">2390 Руб.</p>
                      </div>
                      <div class="buttons"><a class="button product__button" href="#">Купить</a>
                        <div class="buttons__row"><a class="minus product__minus" href="#">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                          <input class="number product__number" value="2"/><a class="plus product__plus" href="">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="products__product swiper-slide"><img class="product__img" src="img/products/2.png" alt=""/>
                    <p class="product__title">Чугунный казан 8 литров</p>
                    <div class="product__line">
                      <div class="product__prices">
                        <p class="product__oldPrice">2690 Руб.</p>
                        <p class="product__price">2390 Руб.</p>
                      </div>
                      <div class="buttons active"><a class="button product__button" href="#">Купить</a>
                        <div class="buttons__row"><a class="minus product__minus" href="#">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                          <input class="number product__number" value="2"/><a class="plus product__plus" href="">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="products__product swiper-slide"><img class="product__img" src="img/products/3.png" alt=""/>
                    <p class="product__title">Чугунный казан 8 литров</p>
                    <div class="product__line">
                      <div class="product__prices">
                        <p class="product__oldPrice">2690 Руб.</p>
                        <p class="product__price">2390 Руб.</p>
                      </div>
                      <div class="buttons"><a class="button product__button" href="#">Купить</a>
                        <div class="buttons__row"><a class="minus product__minus" href="#">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                          <input class="number product__number" value="2"/><a class="plus product__plus" href="">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="products__product swiper-slide"><img class="product__img" src="img/products/4.png" alt=""/>
                    <p class="product__title">Чугунный казан 8 литров</p>
                    <div class="product__line">
                      <div class="product__prices">
                        <p class="product__oldPrice">2690 Руб.</p>
                        <p class="product__price">2390 Руб.</p>
                      </div>
                      <div class="buttons"><a class="button product__button" href="#">Купить</a>
                        <div class="buttons__row"><a class="minus product__minus" href="#">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1L1 8L8 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                          <input class="number product__number" value="2"/><a class="plus product__plus" href="">
                            <svg width="9" height="16" viewbox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 15L8 8L1 0.999999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>--}}
        <x-pages.products :prom="$catalog"/>
    </main>
</x-app-layout>