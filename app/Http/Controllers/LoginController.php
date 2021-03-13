<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('pages.login');
    }

    public function login(LoginRequest $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        if( Auth::guard('customer')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('get.home.index');
        } else {
            Session::flash('fail_login', 'Email hoặc mật khẩu không đúng!');
            return route();
        }
    }
}
