@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ 'css/login.css' }}">
@endsection

@section('header')
    <div class="header-button__register">
        <form action="/register" class="header-button">
            @csrf
            <button class="header-button__register-submit" type="submit">register</button>
        </form>
    </div>
@endsection

@section('main')
    <div class="login">
        <div class="login__title">
            <h2 class="login__title-text">Login</h2>
        </div>
        <div class="login__form">
            <form action="/admin" class="login__form-area" method="post">
                @csrf
                <div class="login-item">
                    <label>メールアドレス</label>
                    <input type="email" name="email" placeholder="例:test@example.com">
                </div>
                <div class="error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="login-item">
                    <label>パスワード</label>
                    <input type="password" name="password" placeholder="例:coachtech1106">
                </div>
                <div class="error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="login-item-submit">
                    <button class="login__form-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection