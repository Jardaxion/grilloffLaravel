<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head/>
<body>
    <x-header/>
    {{ $slot }}
    <x-footer/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.min.js"></script>
    <script src="https://unpkg.com/imask@6.6.0-alpha.0/dist/imask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.19/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.19/dist/js/uikit-icons.min.js"></script>
    <script src="{{asset('js/customSelect.js')}}"></script>
    <script src="{{asset('js/yadnexMap.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-scripts/>
</body>
</html>
