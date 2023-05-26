@props([
  'title' => '',
  'description' => '',
  'descBlock' => '',
  'to' => '',
  'toMore' => '',
  'classes' => '',
  'classesRight' => '',
  'classesCenter' => '',
  'id' => '',
])

<section class="block {{$classes}}" @if($id!='')id="{{$id}}"@endif>
    <div class="container">
      <div class="block__inner">
          @if($title)
        <div class="block__left">
          <div class="block__left-block">
            <p class="block__title">{{$title}}</p>
            <hr class="block__hr">
            @if ($to != '')
                <a class="block__checkAll" href="{{$to}}">
                    <p class="block__checkAll-text">посмотреть все</p>
                    <svg class="block__checkAll-arrow" width="6" height="11" viewbox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 10L5 5.5L1 1" stroke="#5B5B5B"></path>
                    </svg>
                </a>
            @endif
          </div>
        </div>
          @endif
        <div class="block__center {{$classesCenter}}">
          @if ($description != '')
            <p class="block__desc">
              {{$description}}
            </p>
            @if ($toMore != '')
              <a class="block__button" href="{{ $toMore }}">
                <span class="block__button-text">подробней</span>
                <svg width="6" height="11" viewbox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 10L5 5.5L1 1" stroke="#5B5B5B"></path>
                </svg>
              </a>
            @endif
          @else
            {{ $descBlock }}
          @endif
        </div>
        <div class="block__right {{ $classesRight }}">
          {{$slot}}
        </div>
      </div>
    </div>
</section>
