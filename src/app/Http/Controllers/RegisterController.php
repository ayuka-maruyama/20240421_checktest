<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        // フォームデータを取得
        $userData = $request->validated();

        // ユーザーを作成して保存
        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => bcrypt($userData['password']), // パスワードをハッシュ化
        ]);

        // 登録成功のメッセージをフラッシュデータに保存
        $request->session()->flash('status', 'ユーザー登録が完了しました。ログインしてください。');

        // ログイン画面にリダイレクト
        return redirect('/login');
    }
}