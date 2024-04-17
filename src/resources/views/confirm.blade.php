@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('main') 
    <div class="confirm">
        <div class="confirm__header">
            <h2 class="confirm__header-title">Confirm</h2>
        </div>
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $full_name }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $genderText }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="tel" value="{{ $full_tel }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                    <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $content }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header-hidden">お問い合わせの内容</th>
                    <td class="confirm-table__textarea">
                        <input type="text" name="name" value="{{ $detail }}" readonly />
                    </td>
                </tr>
            </table>
        </div>

        <div class="form-submit">
            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="form__button-ok">
                    <button class="form__button-submit--ok" type="submit">送信</button>
                </div>
            </form>

            <form class="form" action="/" method="get">
                @csrf
                <div class="form__button-ng">
                    <button class="form__button-submit--ng" type="submit">修正</button>
                </div>
            </form>
        </div>
    </div>
@endsection