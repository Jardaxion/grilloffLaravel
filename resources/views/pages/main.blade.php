<x-app-layout>
  <main class="main">
    @foreach(App\Models\PromotionCategory::pluck('name') as $prom)
      <x-pages.products :prom="$prom"/>
    @endforeach
    <x-pages.complects />
    <x-pages.discount />
    <x-pages.popular-catalog />
    <x-pages.reviews />
    <x-pages.maps />
  </main>
</x-app-layout>