<p>Имя: {{$name}}</p>
<p>Почта: {{$email}}</p>
<p>Телефон: {{$phone}}</p>
<p>Сообщение: @if(strlen($mess) > 0){{ $mess }} @else Пользователь не оставил сообщения @endif</p>