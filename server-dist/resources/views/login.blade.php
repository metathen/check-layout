@extends('layouts.logreg')
@section('title', "Вход в систему")
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/style/form.css')}}">
@endsection
@section('content')
    <div class="main-content">
        <div class="auth">
            <div class="auth-box box text-center c-white">

                <p class="auth-title form-title">Вход</p>
                <form method="post" class="auth-form" action="{{ route('user.login') }}"> 
                    @csrf
                    <ul>
                        <li>
                            <p>E-mail</p>
                            <input type="email" name="email" id="email" placeholder="E-mail" required autocomplete="off">
                        </li>
                        <li>
                            <p>Пароль</p>
                            <input type="password" name="password" id="password" placeholder="Пароль" required autocomplete="off">
                        </li>
                    </ul>
                    @error('email')
                    <div>{{$message}}</div>
                    @enderror
                    <button type="submit" class="auth-button form-button click tran-tn">Войти в аккаунт</button>
                </form>
                <a href="#" class="auth-pass form-sub">Я не помню пароль</a>

            </div>
        </div>
    </div>
@endsection