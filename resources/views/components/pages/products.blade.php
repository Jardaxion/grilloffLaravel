@props([
  'prom' => []  
])

<section class="products">
  <div class="container">
    <div class="products__inner">
      <div class="products__top">
        <p class="title products__title">{{App\Models\Category::where('id', $prom)->pluck('category')[0]}}</p>
      </div>
      <div class="products__content-wrp swiper">
        <div class="products__content-slider swiper-wrapper">
          @foreach(App\Models\Category::find($prom)->products->take(4) as $product)
            <x-pages.product-card :product="$product" />
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>