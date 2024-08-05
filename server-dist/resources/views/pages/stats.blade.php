@extends('layouts.app')
@section('title', 'Статистика')
@section('content')  
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
@endsection
@section('section_title', 'Общая статистика')