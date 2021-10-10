<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register(){
        return view('account.register');
    }

    public function demoHandleData(Request $request): string
    {
        $name = $request -> get('name');
        return "hello" . $name;
    }
}
