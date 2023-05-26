<section class="reviews" id="reviews">
    <div class="container">
        <div class="reviews__inner">
            <p class="title reviews__title">Отзывы о нашем магазине</p>
            <div class="reviews__content-wrapper swiper">   
                <div class="reviews__content swiper-wrapper">
                    @foreach (App\Models\Review::get() as $review)
                        <a class="reviews__review swiper-slide" href="{{image($review->video)}}" data-fslightbox="gallery">
                            <img class="reviews__img" src="{{image($review->image)}}" alt=""/>
                            <p class="reviews__review-title">{{$review->name}}</p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="reviews__buttons">
                <div class="reviews__arrow reviews__leftArrow swiper-button-prev">
                    <svg width="10" height="19" viewbox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L1 9.5L9 18" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="reviews__arrow reviews__rightArrow swiper-button-next">
                    <svg width="10" height="19" viewbox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 18L9 9.5L1 0.999998" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>