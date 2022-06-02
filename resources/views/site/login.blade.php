@extends('layout.main')
@section('title', 'Đăng nhập tài khoản')
@section('main')

<!--content account-->
<div class="container">
  <div class="row content-my-account">
    <div class="col-md-6 col-sm-12 col-12 content-my-account-left">
      <h2>Đăng nhập</h2>
      <form action="{{route('home.login')}}" method="POST" role="form">
        @csrf
        <p>Tài khoản hoặc gmail <span> *</span></p>
        <input type="text" class="text" name="email" placeholder="">
        <p>Mật khẩu<span> *</span></p>
        <input type="text" class="text" name="password" placeholder="">
        <button type="submit" class="bt">Đăng nhập</button>
        <span><input type="checkbox" class="checkbox">&nbsp;&nbsp;Ghi nhớ tài khoản</span>
        <a href="{{route('home.register')}}" class="bt ">&nbsp;&nbsp;Đăng kí tài khoản</a>
        <div style="margin-top: 20px;">
          <a href="javascript:void(0)" class="text-left lost-password">Quên mật khẩu?</a>
        </div>
      </form>
    </div>
    <div class="col-md-12 form-lost-password">
      <p>Quên mật khẩu? Vui lòng nhập tên người dùng hoặc địa chỉ email của bạn. Bạn sẽ nhận được một liên kết để tạo mật khẩu mới qua email.</p>
      <form>
        <p>Email của bạn</p>
        <input type="text" class="text">
        <button type="submit" class="bt reset-password">Đặt lại mật khẩu</button>
      </form>
    </div>
  </div>
</div>
<!--end content account-->
@stop()