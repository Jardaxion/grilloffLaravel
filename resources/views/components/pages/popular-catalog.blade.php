<section class="popCatalog">
    <div class="container">
      <div class="popCatalog__inner">
        <p class="title popCatalog__title">Популярные каталоги</p>
        <div class="catalog popCatalog__content">
          @foreach (App\Models\PopularCatalogs::get() as $popular)
            <x-catalog.catalog-card :popular="App\Models\Category::where('slug', $popular->title)->get()[0]" />
          @endforeach
        </div>
      </div>
    </div>
  </section>