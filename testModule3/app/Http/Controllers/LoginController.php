<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function showFormLogin(){
return view(view:'login');
    }
}
function login(Request $request) {
    $email = $request->get('email');
    $password = $request->get('password');

    if ($email == 'admin@gmail.com' && $password == '1234') {
        // luu lai trang dang nhap vao session
        session()->put('isLogin', true);
        session()->put('username', $email);
        // chuyen huong
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('show-form-login');
    }
}

