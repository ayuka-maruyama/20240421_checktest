@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ 'css/admin.css' }}">
@endsection

@section('header')
    <div class="header-button__logout">
        <form action="/login" class="header-button">
            @csrf
            <button class="header-button__logout-submit" type="submit">logout</button>
        </form>
    </div>
@endsection

@section('main')
    <div class="admin">
        <div class="admin__title">
            <h2 class="admin__title-text">Admin</h2>
        </div>
        <div class="search__form">
            <form action="/admin" class="admin__form-area" method="post">
                @csrf
                <div class="search-item__input">
                    <input class="search-text" type="text" name="search" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="search-item__select-gender">
                    <select class="select-gender" name="gender">
                        <option class="select-gender-text" disabled selected hidden>性別</option>
                        <option class="select-gender-text" value="1">男性</option>
                        <option class="select-gender-text" value="2">女性</option>
                        <option class="select-gender-text" value="3">その他</option>                   
                    </select>
                </div>
                <div class="search-item__select-category">
                    <select class="select-category" name="contact_category">
                        <option disabled selected hidden>お問い合わせの種類</option>
                        <option class="select-category-text" value="1">商品のお届けについて</option>
                        <option class="select-category-text" value="2">商品の交換について</option>
                        <option class="select-category-text" value="3">商品トラブル</option>                   
                        <option class="select-category-text" value="4">ショップへのお問い合わせ</option>                   
                        <option class="select-category-text" value="5">その他</option>                   
                    </select>
                </div>
                <div class="search-item__select">
                    <input class="select-date" type="date" value="">
                </div>
                <div class="search-item__submit">
                    <button type="submit" class="search__button">検索</button>
                </div>
            </form>
            <form action="/admin" class="reset__form">
            @csrf
                <div class="reset__submit">
                    <button type="submit" class="reset__button">リセット</button>
                </div>
            </form>

            <table>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                @foreach ($contact as $contact)
                <tr>
                    <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                    <td>{{ $contact->gender }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->category_id }}</td>
                </tr>                
                @endforeach
            </table>
        
    </div>
@endsection