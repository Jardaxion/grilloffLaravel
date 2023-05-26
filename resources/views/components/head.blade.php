<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Meta::get('title',$page ? betweenUrlParameterName($page->meta_title) : config('site.title','Example title')) }}</title>

    {!! Meta::tag('robots') !!}

    {!! Meta::tag('locale', config('app.locale')) !!}

    {!! Meta::tag('keywords', $page ? $page->meta_keywords : config('site.keywords')) !!}

    {!! Meta::tag('description', $page ? $page->meta_description : config('site.description')) !!}

    <livewire:styles />

    <link rel="icon" href="{{ config('site.favicon') }}" type="image/ico"/>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=a7d7e70d-fcdb-4d2b-8971-a1d428068d1b&lang=ru_RU" type="text/javascript"></script>
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&amp;family=Roboto:wght@300&amp;display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    {{ $slot }}

    <!-- #### START COUNTERS ##### -->
    @foreach($counters as $counter)
        {!! $counter->counters !!}
    @endforeach
    <!-- ##### END COUNTERS ##### -->

    <x-style/>

</head>
