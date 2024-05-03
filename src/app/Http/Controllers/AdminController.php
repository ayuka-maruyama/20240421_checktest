<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        var_dump($request->$contacts)
        $contacts = DB::table('contacts')->get()->array();
        return view('admin')->with('contacts, $contacts');
    }
}
