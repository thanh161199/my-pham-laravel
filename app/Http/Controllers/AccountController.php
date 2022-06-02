<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Auth;


use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login()
    {
        return view('site.login');
    }
    public function post_login(Request $req)
    {
        $data = $req->only('email','password');
        $check = Auth::guard('account')->attempt($data);
        if($check){
            return redirect()->route('home')->with('ok','Đăng nhập thành công');
        }else{
            return redirect()->route('home.login')->with('Tài khoản mật khẩu không chính xác');
        }

    }
    public function register()
    {
        return view('site.register');
    }
    public function post_register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            're_password' => 'required|same:password',
        ], [
            're_passsword.same' => 'Nhập lại MK không chính xác'
        ]);
        $data = $req->only('name','email','phone','address');
        $data['password']= bcrypt($req->password);
        Account::create($data);
        return redirect()->route('home.login')->with('Đăng kí thành công');
    }
    public function logout()
    {
        Auth::guard('account')->logout();
        return redirect()->route('home.login')->with('ok','Đăng xuất thành công');
    }
}
