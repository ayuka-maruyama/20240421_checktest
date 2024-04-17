@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('main') 
<div class="contact">
<div class="contact__header">
    <h2 class="contact__header-title">Contact</h2>
</div>
<form class="form" action="/confirm" method="post">
    @csrf
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">お名前</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-name">
            <input type="text" name="first-name" placeholder="例:山田">
            <input type="text" name="last-name" placeholder="例:太郎">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">性別</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__radio">
            <label class="radio-label">
                <input type="radio" name="gender" value="1" checked=""checked>男性</label>
            <label class="radio-label">
                <input type="radio" name="gender" value="2">女性</label>
            <label class="radio-label">
                <input type="radio" name="gender" value="3">その他</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">メールアドレス</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-email">
            <input type="email" name="email" placeholder="例:test@example.com">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">電話番号</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-tel">
            <input type="text" name="left-tel" placeholder="例:080">
            <p>-</p>
            <input type="text" name="middle-tel" placeholder="例:1234">
            <p>-</p>
            <input type="text" name="right-tel" placeholder="例:5678">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">住所</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-address">
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">建物名</p>
        </div>
        <div class="form-group__text-building">
            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">お問い合わせの種類</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-content">
            <select name="category_id">
                <option disabled selected hidden>選択してください</option>
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">お問い合わせ内容</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-detail">
            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit">確認画面</button>
    </div>
</form>
</div>
@endsection