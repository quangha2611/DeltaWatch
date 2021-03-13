<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function bcrypt;
use function redirect;

class SignupController extends Controller
{
    public function index()
    {
        return view('pages.sign_up');
    }

    public function signup(SignUpRequest $request)
    {
        $password = $request->input('password');
        $repassword = $request->input('repassword');

        if ($password != $repassword) {
            Session::flash('fail_repass', 'Nhập lại mật khẩu không khớp!');
            return back();
        } else {
            $data = $request->except(['_token', 'repassword']);
            $data['password'] = bcrypt($data['password']);
            Customer::insert($data);
            Session::flash('signup_success', 'Đăng ký thành công!');
            return redirect()->route('get.login.index');
        }
    }
}
