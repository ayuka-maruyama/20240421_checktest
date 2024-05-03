<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    // confirm画面を表示させるための記載
    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        $category = Category::find($request->category_id);

        return view('confirm', compact('contacts', 'category'));
    }

    // データベースへの登録(データベースのカラム順に記載する)
    public function store(ContactRequest $request)
    {
        // 修正ボタンが押されたときの挙動
        if($request->has('back')){
            return redirect('/')->withInput();
        }

        // 送信ボタンが押されたときの挙動
        $request['tell'] = $request->tel_1 . $request->tel_2 . $request->tel_3;

        // テーブルへのデータ追加
        Contact::create(
            $request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tell',
                'address',
                'building',
                'detail'
            ])
        );

        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::all();
        return view('admin', ['contacts' => $contacts]); // ビューに渡す変数名を修正
    }
}
