<x-app-layout>
    <main class="main">
        <section class="catalogPage">
          <div class="container">
            <div class="catalog__inner">
              <p class="title catalogPage__title">Каталог</p>
              <div class="catalog catalog__content">
                @foreach(App\Models\Category::get() as $category)
                  <x-catalog.catalog-card :popular="$category" />
                @endforeach
              </div>
            </div>
          </div>
        </section>
    </main>
</x-app-layout>