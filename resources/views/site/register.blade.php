@extends('layout.main')
@section('title', 'Đăng kí tài khoản')
@section('main')

<!--content account-->
<div class="container">
  <div class="row content-my-account">
    <div class="col-md-6 col-sm-12 col-12 content-my-account-left">
      <h2>Đăng kí tài khoản</h2>
      <form action="" method="POST" role="form">
        @csrf
        <p>Họ tên <span> *</span></p>
        <input type="text" class="text" name="name" placeholder="Tài khoản">
        @error('name') {{$message}} @enderror
        <p>Tài khoản hoặc gmail <span> *</span></p>
        <input type="text" class="text" name="email" placeholder="Tài khoản">
        @error('email') {{$message}} @enderror
        <p>Số điện thoại<span> *</span></p>
        <input type="text" class="text" name="phone" placeholder="Số điện thoại">
        @error('phone') {{$message}} @enderror
        <p>Địa chỉ<span> *</span></p>
        <input type="text" class="text" name="address" placeholder="Địa chỉ">
        @error('address') {{$message}} @enderror
        <p>Mật khẩu<span> *</span></p>
        <input type="text" class="text" name="password" placeholder="Mật khẩu">
        @error('password') {{$message}} @enderror
        <p>Nhập lại mật khẩu<span> *</span></p>
        <input type="text" class="text" name="re_password" placeholder="Nhập lại mật khẩu">
        @error('re_password') {{$message}} @enderror
        <button type="submit" class="bt">Đăng kí</button><span><input type="checkbox" class="checkbox">&nbsp;&nbsp;Ghi nhớ tài khoản</span>
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
        <button type="submit" class="bt reset-password">RESET PASSWORD</button>
      </form>
    </div>
  </div>
</div>
<hr>
<!--end content account-->
@stop()