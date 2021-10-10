<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function getLayout(){
        return view('admin.layout.master-layout');
    }

    public function getForm(){
        return view('admin.demo.form');
    }

    public function getTable(){
        return view('admin.demo.table');
    }
}
