<section class="ourShops" id="contacts">
    <div class="container">
      <div class="ourShops__inner">
        <div class="ourShop__box">
          <p class="title ourShops__title">Наши магазины</p>
          <div class="ourShop__buttons">
            <div class="ourShops__arrow ourShops__leftArrow swiper-button-prev mobile">
              <svg width="14" height="16" viewbox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM14 7L1 7V9L14 9V7Z" fill="#414141"></path>
              </svg>
            </div>
            <div class="ourShops__arrow ourShops__rightArrow swiper-button-next mobile">
              <svg width="14" height="16" viewbox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.7071 8.70711C14.0976 8.31658 14.0976 7.68342 13.7071 7.29289L7.34315 0.928933C6.95262 0.538408 6.31946 0.538408 5.92893 0.928933C5.53841 1.31946 5.53841 1.95262 5.92893 2.34315L11.5858 8L5.92893 13.6569C5.53841 14.0474 5.53841 14.6805 5.92893 15.0711C6.31946 15.4616 6.95262 15.4616 7.34315 15.0711L13.7071 8.70711ZM-8.74228e-08 9L13 9L13 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#414141"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="ourShops__content">
          <div class="ourShops__content-top">
            <div class="ourShops__arrow ourShops__leftArrow swiper-button-prev desktop">
              <svg width="14" height="16" viewbox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM14 7L1 7V9L14 9V7Z" fill="#414141"></path>
              </svg>
            </div>
            <div class="ourShops__buttons-wrp swiper">
              <div class="ourShops__buttons swiper-wrapper">
                @foreach (App\Models\OurShop::get('city') as $ourShop)    
                  <a class="ourShops__button js-select-page swiper-slide @if($loop->first) active @endif" href="#" data-select-page="{{$ourShop->city}}">{{$ourShop->city}}</a>
                @endforeach
              </div>
            </div>
            <div class="ourShops__arrow ourShops__rightArrow swiper-button-next desktop">
              <svg width="14" height="16" viewbox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.7071 8.70711C14.0976 8.31658 14.0976 7.68342 13.7071 7.29289L7.34315 0.928933C6.95262 0.538408 6.31946 0.538408 5.92893 0.928933C5.53841 1.31946 5.53841 1.95262 5.92893 2.34315L11.5858 8L5.92893 13.6569C5.53841 14.0474 5.53841 14.6805 5.92893 15.0711C6.31946 15.4616 6.95262 15.4616 7.34315 15.0711L13.7071 8.70711ZM-8.74228e-08 9L13 9L13 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#414141"></path>
              </svg>
            </div>
          </div>
          <div class="ourShops__content-bottom">
            @foreach (App\Models\OurShop::get() as $ourShop)
              <div class="ourShops__page js-page" data-page="{{$ourShop->city}}">
                <div class="ourShops__page-left">
                  <div class="ourShops__page-map" style="width: 100%; height: 100%;" data-map="{{$ourShop->adress}}" id="{{$ourShop->id}}"></div>
                </div>
                <div class="ourShops__page-right">
                  <div class="ourShops__box">
                    <p class="ourShops__miniTitle">Адрес магазина</p>
                    <p class="ourShops__desc">{{$ourShop->adress}}</p>
                  </div>
                  <div class="ourShops__box">
                    <p class="ourShops__miniTitle">Телефон</p>
                    <p class="ourShops__desc">{{phone($ourShop->phone)}}</p>
                  </div>
                  <div class="ourShops__box">
                    <p class="ourShops__miniTitle">График работы:</p>
                    <p class="ourShops__desc">
                      {{$ourShop->fromTo}}: {{$ourShop->fromToDate}}
                      <br> {{$ourShop->weekend}}: <span class="ourShops__red">Выходной</span>
                    </p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>