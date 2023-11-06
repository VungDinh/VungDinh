<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login(Request $request){
        if($request->method() == 'GET'){
            return view('admin.login');
        }else{
            $input = $request->except('_token');
            if(Auth::attempt($input)){
                return redirect()->route('list-book');
            }
            return redirect('/login')->with('message', 'Thông tin đăng nhập không đúng.');
        }
    }
}
