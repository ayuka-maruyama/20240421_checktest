<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function admin(LoginRequest $request)
    {
        $contact = $request->only(['email', 'password']);
        return view('admin', ['contact' => $contact]);
    }

    public function store(LoginRequest $request)
    {
        $contact = $request->only(['email', 'password']);
        Contact::create($contact);

        return view('admin');
    }
}
