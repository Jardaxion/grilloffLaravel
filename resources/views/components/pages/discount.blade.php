<section class="discount">
    <div class="container">
      <div class="discount__inner">
        @foreach (App\Models\Stocks::get() as $stock)
          <a class="discount__box" href="{{$stock->link}}">
            <img class="discount__img" src="{{image($stock->image)}}" alt="">
          </a>
        @endforeach
      </div>
    </div>
  </section>