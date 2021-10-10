<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function helloworld(){
        return view('admin.welcome');
    }
}
