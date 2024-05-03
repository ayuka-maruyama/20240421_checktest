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
            <div class="confirm-table__inner">
                <form action="/thanks" method="post">
                    @csrf
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                {{ $contacts['first_name'] }}&ensp;{{ $contacts['last_name'] }}
                                <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}" readonly />
                                <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                @if($contacts['gender']==1)
                                男性
                                @elseif($contacts['gender']==2)
                                女性
                                @else
                                その他
                                @endif
                                <input type="hidden" name="gender" value="{{ $contacts['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                {{ $contacts['email'] }}
                                <input type="hidden" name='email' value="{{ $contacts['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                {{ $contacts['left-tel'] }}{{ $contacts['middle-tel'] }}{{ $contacts['right-tel'] }}
                                <input type="hidden" name='left-tel' value="{{ $contacts['left-tel'] }}" readonly />
                                <input type="hidden" name='middle-tel' value="{{ $contacts['middle-tel'] }}" readonly />
                                <input type="hidden" name='right-tel' value="{{ $contacts['right-tel'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                {{ $contacts['address'] }}
                                <input type="hidden" name='address' value="{{ $contacts['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                {{ $contacts['building'] }}
                                <input type="hidden" name='building' value="{{ $contacts['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                {{$category->content }}
                                <input type="hidden" name='category_id' value="{{ $category->id }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                {{ $contacts['detail'] }}
                                <input type="hidden" name='detail' value="{{ $contacts['detail'] }}" readonly />
                            </td>
                    </table>
                    <div class="confirm-btn">
                        <input class="confirm-btn_send" type="submit" value="送信" name="send">
                        <input class="confirm-btn_back" type="submit" value="修正" name="back">
                    </div>
                </form>
            </div>
    </div>
@endsection