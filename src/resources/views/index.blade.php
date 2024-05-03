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
            <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}">
            <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}">
        </div>
    </div>
    <div class="form__error">
        <div class="form__error-two">
            <div class="error-name-f">
                @error('first_name')
                {{ $message }}
                @enderror
            </div>
            <div class="error-name-l">
                @error('last_name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">性別</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__radio">
            <label class="radio-label">
                <input type="radio" name="gender" value="1" checked=""checked value="{{ old('gender') }}">男性</label>
            <label class="radio-label">
                <input type="radio" name="gender" value="2" value="{{ old('gender') }}">女性</label>
            <label class="radio-label">
                <input type="radio" name="gender" value="3" value="{{ old('gender') }}">その他</label>
        </div>
    </div>
    <div class="form__error">
        @error('gender')
        {{ $message }}
        @enderror
    </div>
    
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">メールアドレス</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-email">
            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
        </div>
    </div>
    <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">電話番号</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-tel">
            <input type="text" name="left-tel" placeholder="例:080" value="{{ old('left-tel') }}">
            <p>-</p>
            <input type="text" name="middle-tel" placeholder="例:1234" value="{{ old('middle-tel') }}">
            <p>-</p>
            <input type="text" name="right-tel" placeholder="例:5678" value="{{ old('right-tel') }}">
        </div>
    </div>
    <div class="form__error">
        @if($errors->has('left-tel'))
            {{ $errors->first('left-tel') }}
        @elseif($errors->has('middle-tel'))
            {{ $errors->first('middle-tel') }}
        @elseif($errors->has('right-tel'))
            {{ $errors->first('right-tel') }}
        @endif    
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">住所</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-address">
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
        </div>
    </div>
    <div class="form__error">
        @error('address')
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">建物名</p>
        </div>
        <div class="form-group__text-building">
            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
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
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{$category->content }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form__error">
        @error('category_id')
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <div class="form-group__title">
            <p class="form__label-title">お問い合わせ内容</p>
            <p class="form__label-required">※</p>
        </div>
        <div class="form-group__text-detail">
            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" >{{ old('detail') }}</textarea>
        </div>
    </div>
    <div class="form__error">
        @error('detail')
        {{ $message }}
        @enderror
    </div>
    <div class="form__button">
        <button class="form__button-submit">確認画面</button>
    </div>
</form>
</div>
@endsection