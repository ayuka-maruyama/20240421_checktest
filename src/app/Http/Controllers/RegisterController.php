<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        // バリデーション済みのデータを取得
        $validatedData = $request->validated();

        // ユーザーの作成などの処理を行う
        User::create($validatedData);

        // 登録後の画面などにリダイレクトする
        return redirect('/login');
    }
}