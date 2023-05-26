<section class="complects">
    <div class="container">
        <div class="complects__inner">
            <p class="title complects__title">Комплекты</p>
            <div class="complects__content">
                @foreach (App\Models\Complects::get() as $complect)
                    <a class="complect" href="{{$complect->url}}">
                        <div class="complect__image-wrapper">
                            <img class="complect__img" src="{{image($complect->image)}}" alt="">
                            <div class="complect__background"></div>
                        </div>
                        <p class="complect__title">{{$complect->title}}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>