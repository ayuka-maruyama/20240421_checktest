<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contact', 'categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only([
            'email',
            'address',
            'building',
        ]);
        
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

        $left_tel = $request->input('left-tel');
        $middle_tel = $request->input('middle-tel');
        $right_tel = $request->input('right-tel');
        $full_tel = $left_tel . $middle_tel . $right_tel;
        
        $content= $request->input('content');

        $detail = $request->input('detail');

        return view('confirm', compact('full_name', 'genderText', 'full_tel', 'contact', 'content', 'detail'));
    }

    public function store(Request $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'genderText',
            'email',
            'full-tel',
            'address',
            'building',
            'content',
            'detail'
        ]);

        Contact::create($contact);

        return view('thanks');
    }
}
