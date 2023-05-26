<x-app-layout>
    <main class="main">
        <section class="cabinet-section">
            <div class="register">
                <div class="container">
                    <div class="register__block">
                        <div class="block__title text-center">Регистрация</div>
                        <div class="register__text text-center">Зарегестрируйте новый аккаунт</div>
                        <form method="POST" action="{{ route('register') }}" class="form register__form" >
                            @csrf
                            <div class="form__row">
                                <input name="email" value="{{ old('email') }}" type="text" class="input-row__input" placeholder="E-mail">
                                @error('email')<span class="error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form__row">
                                <input name="password"  type="password" class="input-row__input" placeholder="Пароль">
                                @error('password')<span class="error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form__row">
                                <input name="password_confirmation"  type="password" class="input-row__input" placeholder="Повтор пароля">
                            </div>
                            <div class="form__row">
                                <input name="name" value="{{ old('name') }}" type="text"
                                       class="input-row__input" placeholder="ФИО">
                                @error('name')<span class="error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form__row">
                                <input name="phone" value="{{ old('phone') }}" type="tel"
                                       class="input-row__input" placeholder="Телефон">
                                @error('phone')<span class="error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form__text">
                                Нажимая кнопку «Регистрация», я даю свое согласие на обработку моих персональных данных согласно 4 ст. 9 152-ФЗ
                            </div>
                            <div class="text-center">
                               <button class="btn-red" type="submit">Зарегистрироваться</button>
                                <div class="form__policy">
                                    Если у Вас уже есть аккаунт <a href="{{route('login')}}">выполните вход</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
