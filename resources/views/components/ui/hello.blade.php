@props(['title', 'classes' => ''])

<section class="hello {{ $classes }}">
    <div class="container">
      <div class="hello__inner">
        <h2 class="hello__title">{{ $title }}</h2>
      </div>
    </div>
</section>