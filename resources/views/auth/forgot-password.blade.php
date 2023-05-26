<x-app-layout>
    <main class="main">
            <section class="cabinet-section">
                <div class="register">
                    <div class="container">
                        <div class="register__block">
                            @if(session('status'))

                                <p style="text-align: center;margin-bottom: 50px;color: green" class="login-and-register-form__policy">{{ session('status') }}</p>
                            @endif
                            <div class="block__title text-center">Восстановление данных входа</div>
                            <div class="register__text text-center">Введите адрес электронной почты, указанный в параметрах вашей учетной записи. На этот адрес будет отправлено сообщение, содержащее код подтверждения. <br>После его получения вы сможете ввести новый пароль для вашей учетной записи.</div>
                            <form method="POST" action="{{ route('password.email') }}" class="form register__form">
                                @csrf
                                <div class="form__row">
                                    <input value="{{ old('email') }}" name="email" type="text" class="input-row__input"
                                           placeholder="Ваш e-mail">
                                    @error('email')
                                    <span class="error">{{ $message }}</span>
                                    @enderror</div>
                               <div class="text-center">
                                    <button class="btn-red" type="submit">Отправить</button>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </main>
</x-app-layout>
