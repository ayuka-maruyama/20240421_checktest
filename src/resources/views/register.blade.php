@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ 'css/register.css' }}">
@endsection

@section('header')
    <div class="header-button__login">
        <form action="/login" class="header-button">
            @csrf
            <button class="header-button__login-submit" type="submit">login</button>
        </form>
    </div>
@endsection

@section('main')
    <div class="register">
        <div class="register__title">
            <h2 class="register__title-text">Register</h2>
        </div>
        <div class="register__form">
            <form action="/register" class="register__form-area" method="post">
                @csrf
                <div class="register-item">
                    <label>お名前</label>
                    <input type="text" name="name" placeholder="例:山田 太郎">
                </div>
                <div class="error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="register-item">
                    <label>メールアドレス</label>
                    <input type="text" name="email" placeholder="例:test@example.com">
                </div>
                <div class="error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="register-item">
                    <label>パスワード</label>
                    <input type="password" name="password" placeholder="例:coachtech1106">
                </div>
                <div class="error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="register-item-submit">
                    <button class="register__form-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection