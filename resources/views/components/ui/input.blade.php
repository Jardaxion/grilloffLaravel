{{--@props([--}}
{{--'type' => 'text',--}}
{{--'placeholder',--}}
{{--'name'--}}
{{--])--}}
@if(!isset($type))
    @php $type = 'text' @endphp
@endisset

<input
       value="{{ old($name) }}"
       name="{{ $name }}"
       type="{{ $type }}"
{{--       placeholder="{{ $name }}"--}}
>
{{--@include('components.ui.error',['name'=>$name])--}}

