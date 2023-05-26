<x-app-layout>
    <div class="profile">
        <div class="container">
            <div class="profile__block flex">
                @include('components.dashboard.sidebar')
                <div class="profile__password password">
                    <div class="profile__title">Сменить пароль</div>
                    <form action="{{ route('dashboard.change-password.store') }}" method="post">
                        @csrf
                        <div class="password__row">
                            <input type="password" name="password" placeholder="Новый пароль">
                            @error('password')<span class="error">{{ $message }}</span>@enderror
                        </div>
                        <div class="password__row">
                            <input type="password" name="password_confirmation" placeholder="Повторите пароль">
                        </div>
                        <div class="password__button">
                            <button class="btn-red">Сменить пароль</button>
                        </div>
                        @if(session('message'))
                            <div style="    padding: 20px;
    border: 3px solid green;
    margin-top: 20px;
    text-align: center;">{{ session('message') }}</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
