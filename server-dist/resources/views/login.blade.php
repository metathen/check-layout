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
</head>
<body>
    <main class="main">
        <div class="main-content">
            <div class="auth">
                <div class="auth-box box text-center c-white">
        
                    <p class="auth-title form-title">Вход</p>
                    @csrf
                    <form method="post" class="auth-form" action="{{ route('user.login') }}"> 
                        <ul>
                            <li>
                                <p>E-mail</p>
                                <input type="email" name="emailauth" id="emailauth" placeholder="E-mail" required autocomplete="off">
                            </li>
                            <li>
                                <p>Пароль</p>
                                <input type="password" name="passwordauth" id="passwordauth" placeholder="Пароль" required autocomplete="off">
                            </li>
                        </ul>
                        <button type="submit" class="auth-button form-button click tran-tn">Войти в аккаунт</button>
                    </form>
                    <a href="#" class="auth-pass form-sub">Я не помню пароль</a>
        
                </div>
            </div>
        </div>
    </main>
</body>
</html>