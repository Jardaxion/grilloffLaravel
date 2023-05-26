@props([
    'name' => ''
])
<div class="footer__column">
    <div class="footer__box">
        <p class="footer__column-title">{{showColumnMenu($name)}}</p>
        <div class="footer__mobileToggle">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="footer__column-col">
        @foreach(Menu::get($name) as $foot)
          <a class="footer__column-link" href="{{$foot->uri}}">{{$foot->title}}</a>
        @endforeach
      </div>
</div>