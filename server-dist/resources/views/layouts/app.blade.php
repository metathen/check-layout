<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/style/setting.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/admin/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/admin/media.css')}}">
</head>
<body>
    <main class="main admin">
        <div class="main-box admin-box box">
            <div class="main-content">

                <nav class="admin-nav">
                    <ul>
                        <li><a href="/admin"><img src="{{ asset('assets/image/admin/graph.svg') }}" alt="График"></a></li>
                        <li><a href="/course"><img src="{{ asset('assets/image/admin/study.svg') }}" alt="Курсы"></a></li>
                        <li><a href="/new"><img src="{{ asset('assets/image/admin/file.svg') }}" alt="Добавить курс"></a></li>
                        <li><a href="/user" class="user"><img src="{{ asset('assets/image/admin/user.svg') }}" alt="Изменить пользователя"></a></li>
                    </ul>

                    <a href="/logout" class="exit" title="Выйти из системы"><img src="{{ asset('assets/image/admin/exit.svg') }}" alt="Выход"></a>
                </nav>

                <div class="admin-content admin-container">
                    <div class="admin-head">
                        <a href="#" class="admin-logo">
                            <img src="{{ asset('assets/image/icon/logo.svg') }}" alt="Логотип">
                        </a>
                        <div class="admin-user c-white">
                            <div class="admin-ava">
                                <img src="" alt="">
                            </div>
                            <p>Александр С.</p>
                        </div>
                    </div>
                    <div class="admin-block c-white">
                        <p class="admin-title">@yield('section_title')</p>
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="{{ asset('assets/script/admin/script.js') }}"></script>
</body>
</html>