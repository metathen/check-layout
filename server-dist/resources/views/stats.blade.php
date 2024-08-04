<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

                    <div class="exit"><img src="{{ asset('assets/image/admin/exit.svg') }}" alt="Выход"></div>
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
                        <p class="admin-title">Общая статистика</p>
                        <div class="stat">
                            <div class="stat-left">
                                <ul class="stat-info r-std bg-blue">
                                    <li>
                                        <p class="title">Воспроизведения</p>
                                        <p>935</p>
                                    </li>
                                    <li>
                                        <p>Первичные Воспроизведения</p>
                                        <p>800</p>
                                    </li>
                                    <li>
                                        <p>Повторные Воспроизведения</p>
                                        <p>135</p>
                                    </li>
                                    <li>
                                        <p>Время просмотра</p>
                                        <p>25 мин. 52 с.</p>
                                    </li>
                                </ul>
                                <ul class="stat-img">
                                    <li><img src="" alt=""></li>
                                    <li><img src="" alt=""></li>
                                </ul>
                                <ul class="stat-tab">
                                    <li>
                                        <p class="stat-tab__title">Заработок</p>
                                        <p class="stat-tab__value">20 540 Р.</p>
                                    </li>
                                    <li>
                                        <p class="stat-tab__title">Подписки</p>
                                        <p class="stat-tab__value">300</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="stat-right">
                                <div class="calendar">
                                    <div class="calendar-head">
                                        <div class="calendar-date">
                                            <div class="calendar-month">Июль</div>
                                            <div class="calendar-year">2024</div>
                                        </div>
                                    </div>
                                    <ul class="calendar-weeks">
                                        <li>ПН</li>
                                        <li>ВТ</li>
                                        <li>СР</li>
                                        <li>ЧТ</li>
                                        <li>ПТ</li>
                                        <li>СБ</li>
                                        <li>ВС</li>
                                    </ul>
                                    <ul class="calendar-day">
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                        <li>01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="{{ asset('/assets/script/admin/script.js') }}"></script>
</body>
</html>