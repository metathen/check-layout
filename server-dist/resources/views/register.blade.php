@extends('layouts.logreg')
@section('title', 'Регистрация в системе')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/style/reg.css')}}">
@endsection
@section('content')
    <div class="main-box box">

        <div class="reg c-white">
            <p class="reg-title form-title">Создать аккаунт</p>
            <form method="post" action="{{ route('user.register') }}">
                @csrf
                <ul class="reg-body form-body">
                    <li>
                        <p>Имя</p>
                        <input type="text" name="username" id="username" placeholder="Имя" autocomplete="off" required>
                    </li>
                    <li>
                        <p>Почта</p>
                        <input type="email" name="email" id="email" placeholder="Почта" required autocomplete="off">
                    </li>
                    <li>
                        <p>Телефон</p>
                        <input type="tel" name="tel" id="tel" placeholder="Телефон" required autocomplete="off">
                    </li>
                    <li>
                        <p>Пароль</p>
                        <input type="password" name="password" id="password" placeholder="Пароль" required autocomplete="off">
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
@endsection