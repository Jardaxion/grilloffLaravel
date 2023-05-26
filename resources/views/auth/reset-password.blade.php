<x-app-layout>
    <main class="main">
        <section class="cabinet-section">
            <div class="profile">
                <div class="container">
                    <div class="profile__block flex">
                        <div class="profile__password password">
                            <div class="profile__title">Сменить пароль</div>
                            @if(session('status'))
                                <strong style="color: green;text-align: center">{{ session('status') }}</strong>
                            @endif
                            <form method="POST" action="{{ route('password.update') }}">
                                <input style="display: none" name="token" value="{{ request()->route('id') }}">
                                @csrf
                                <div class="password__row">
                                <input name="email" value="{{ old('email',request('email')) }}" type="text" class="input-row__input"
                                       placeholder="Ваш e-mail">
                                @error('email')<span class="error">{{ $message }}</span>@enderror
                                </div>
                                <div class="password__row">
                                    <input name="password"  type="password" class="input-row__input"
                                           placeholder="Пароль">
                                @error('password')<span class="error">{{ $message }}</span>@enderror
                                </div>
                                <div class="password__row">
                                    <input name="password_confirmation"  type="password" class="input-row__input"
                                           placeholder="Подтверждение пароля">
                                </div>
                                <div class="password__button">
                                    <button type="submit" class="btn-red">Сменить пароль</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>

