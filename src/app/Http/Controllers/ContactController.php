<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contact', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $first_name = $request->input('first-name');
        $last_name = $request->input('last-name');
        $full_name = $first_name . ' ' . $last_name;

        $gender = $request->input('gender');
        $genderText = '';
        if ($gender === '1' ) {
            $genderText = '男性';
        } elseif ($gender === '2' ) {
            $genderText = '女性';
        } elseif ($gender === '3' ) {
            $genderText = 'その他';
        }

        $email = $request->input('email');

        $left_tel = $request->input('left-tel');
        $middle_tel = $request->input('middle-tel');
        $right_tel = $request->input('right-tel');
        $full_tel = $left_tel . $middle_tel . $right_tel;

        $address = $request->input('address');

        $building = $request->input('building');

        $category_id = $request->input('category_id');
        // $category_idText = '';
        // if ($category_id === '1' ) {
        //     $category_idText = '商品のお届けについて';
        // } elseif ($category_id === '2' ) {
        //     $category_idText = '商品の交換について';
        // } elseif ($category_id === '3' ) {
        //     $category_idText = '商品トラブル';
        // } elseif ($category_id === '4' ) {
        //     $category_idText = 'ショップへのお問い合わせ';
        // } elseif ($category_id === '5' ) {
        //     $category_idText = 'その他';
        // }

        $detail = $request->input('detail');

        return view('confirm', compact('full_name', 'genderText', 'email', 'full_tel', 'address', 'category_id', 'building', 'detail'));
    }

    public function store(ContatRequest $request)
    {
        $contact = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'category_id' => $request->input('category_id'),
            'detail' => $request->input('detail')
        ];  

        Contact::create($contact);

        return view('thanks');
    }
}
