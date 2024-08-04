<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Restudy Auth</title>
    <link rel="stylesheet" href="{{ asset('assets/style/media.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/setting.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/form.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/reg.css')}}">
</head>
<body>
    <main class="main">
        <div class="main-box box">

            <div class="reg c-white">
                <p class="reg-title form-title">Создать аккаунт</p>
                @csrf
                <form method="post" action="{{ route('user.register') }}">
                    <ul class="reg-body form-body">
                        <li>
                            <p>Имя</p>
                            <input type="text" name="username" id="username" placeholder="Имя" autocomplete="off" required>
                        </li>
                        <li>
                            <p>Почта</p>
                            <input type="email" name="usermail" id="usermail" placeholder="Почта" required autocomplete="off">
                        </li>
                        <li>
                            <p>Телефон</p>
                            <input type="tel" name="tel" id="tel" placeholder="Телефон" required autocomplete="off">
                        </li>
                        <li>
                            <p>Пароль</p>
                            <input type="password" name="userpassword" id="userpassword" placeholder="Пароль" required autocomplete="off">
                        </li>
                    </ul>
                    <div class="form-btn reg-btn">
                        <a href="/login" class="reg-button form-button click tran-tn">Войти</a>
                        <button type="submit" class="reg-success form-button click tran-tn">Оформить</button>
                    </div>
                </form>
            </div>

            <div class="confirm">
                <div class="confirm-item">
                    <input type="checkbox" name="save" id="save">
                    <label for="save">Я соглашаюсь с <a href="#" target="_blank">Сохранением учетных данных для будущих транзакций</a> и <a href="#" target="_blank" rel="noopener noreferrer">Условиями подписки</a></label>
                </div>
                <div class="confirm-item">
                    <input type="checkbox" name="confirm" id="confirm">
                    <label for="confirm">Я даю <a href="#" target="_blank" rel="noopener noreferrer">Согласие на обработку персональных данных</a></label>
                </div>
                <p>
                    Нажимая кнопку «Оформить», я соглашаюсь с 
                    <a href="" target="_blank" rel="noopener noreferrer">
                        Политикой конфиденциальности, Лицензионным соглашением, Политикой использования файлов «Cookie»
                    </a>, а также даю 
                    <a href="#" target="_blank" rel="noopener noreferrer">Согласие на получение рассылки</a>
                    рекламно-информационных материалов. Подписка продляется автоматически в зависимости от выбранного периода (раз в месяц. 6 месяцев или год). Вы можете отменить ее в любое время в настройках профиля, либо написав на <a href="mailto:support@restudy.io">support@restudy.io</a>.
                </p>
            </div>

        </div>

        <div class="confirm-bg confirm-bg-1">
            <img src="{{ asset('/assets/image/reg/reg-img-1.png') }}" alt="">
        </div>
        <div class="confirm-bg confirm-bg-2">
            <img src="{{ asset('/assets/image/reg/reg-img-2.png') }}" alt="">
        </div>

    </main>
</body>
</html>