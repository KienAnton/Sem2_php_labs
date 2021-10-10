<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{

    public function handlePathVariable($id){
        return "Tham số vừa truyền lên là 1 $id";
    }

    public function handleQueryString(Request $request){
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        return view('datahandle', [
            'firstName' =>$firstName,
            'lastName' =>$lastName,
            'email' =>$email
        ]);
    }

    public function handleForm(){
        return view('admin.demo.form-data');

    }

    public function processForm(Request $request){
        $data = $request->all();
        return view('admin.demo.form-process',$data);
    }




}
