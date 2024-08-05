<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/style/media.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/setting.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style/form.css')}}">
    @yield('styles')
</head>
<body>
    <main class="main">
        @yield('content')
    </main>
</body>
</html>