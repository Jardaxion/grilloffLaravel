<x-app-layout>
    <main class="main">
        <section class="catalogFull">
          <div class="container">
            <div class="catalogFull__inner">
              <div class="catalogFull__nav navigationSalt">
                <a class="catalogFull__nav-link navigationSalt__link" href="/">Главная /</a>
                <a class="catalogFull__nav-link navigationSalt__link" href="{{route('catalog')}}">Каталог /</a>
                <p class="catalogFull__nav-noLink navigationSalt__text">Поиск</p>
              </div>
                @if(count($products) != 0)
                    <div class="catalogFull__line">
                        <p class="title catalogFull__title">Поиск</p>
                        <div class="catalogFull__sorting">
                            <p class="catalogFull__sorting-title">Сортировать</p>
                            <a class="catalogFull__button @if($sort == 'name') _active @endif" href="{{route('search', ['sort' => 'name', 'search' => $req->query('search')])}}">По алфавиту</a>
                            <a class="catalogFull__button @if($sort == 'price') _active @endif" href="{{route('search', ['sort' => 'price', 'search' => $req->query('search')])}}" href="#">Дешевле</a>
                            <a class="catalogFull__button @if($sort == 'priceDesc') _active @endif" href="{{route('search', ['sort' => 'priceDesc', 'search' => $req->query('search')])}}" href="#">Дороже</a>
                            <a class="catalogFull__button @if($sort == 'created_at') _active @endif" href="{{route('search', ['sort' => 'created_at', 'search' => $req->query('search')])}}" href="#">По дате</a>
                        </div>
                    </div>
                    <div class="products__content">
                        @foreach($products as $product)
                            <x-pages.product-card :product="$product" />
                        @endforeach
                    </div>
                    @if ($products->lastPage() > 1)
                        <div class="catalogFull__pagination">
                                <a class="pagination__left" @if($products->currentPage() == 1) onClick="return false;" @endif href="{{ $products->url($products->currentPage()-1) }}">
                                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1 6L6 11" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="pagination__numbers">
                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                        <a class="pagination__number {{($products->currentPage() == $i) ? ' active' : ''}}" href="{{ $products->url($i) }}">{{$i}}</a>
                                    @endfor
                                </div>
                                <a class="pagination__right" @if($products->currentPage() == $products->lastPage()) onClick="return false;" @endif href="{{ $products->url($products->currentPage()+1) }}">
                                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L6 6L1 0.999999" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                        </div>
                    @endif
                @else
                    <p class="title catalogFull__title" style="margin-bottom: 10px;">Поиск</p>
                    <p>По вашему запросу ничего не было найдено</p>
                @endif
            </div>
          </div>
        </section>
    </main>
</x-app-layout>