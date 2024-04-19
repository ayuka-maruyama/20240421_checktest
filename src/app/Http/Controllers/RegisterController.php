<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function login(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        return view('register', ['contact' => $contact]);
    }

    public function store(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        Contact::create($contact);

        return view('login');
    }

}
