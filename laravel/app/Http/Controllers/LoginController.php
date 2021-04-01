<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Session;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = Auth::user();

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        // || Auth::attempt(['phone_number' => $request->email, 'password' => $request->password])) {


        return view('login.login', [
            'name' => $request->name,
            'msg' => "Tài khoản/mật khẩu không đúng!"

        ]);
    }
}
