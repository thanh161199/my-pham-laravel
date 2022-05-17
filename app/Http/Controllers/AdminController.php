<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        // User::create([
        //     'name' => "Admin Manager",
        //     'email' => "admin@example.com",
        //     'password' =>bcrypt(123456)
        // ]);
        return view('siteAdmin.dashboard');
        // echo '<h1>Admin page</h1>';
    }
    public function login(){
        return view('siteAdmin.login');
    }

    public function post_login(LoginRequest $req)
    {
        $data = $req->only('email','password');
        $check_login = Auth::attempt($data);
        if($check_login){
            return redirect()->route('admin.dashboard')->with('yes','Đăng nhập thành công');
        }else{
            return redirect()->back('admin.dashboard')->with('no','Đăng nhập không thành công');
        }

    }
}
?>