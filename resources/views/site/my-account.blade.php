@extends('layout.main')
@section('title', 'account page')
@section('main')
<!--title page-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span> / Shop / My account</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->

<!--content account-->
<div class="container">
  <div class="row content-my-account">
    <div class="col-md-6 col-sm-12 col-12 content-my-account-left">
      <h2>Login</h2>
      <form>
        <p>Username or email address <span>*</span></p>
        <input type="text" class="text">
        <p>Password<span>*</span></p>
        <input type="text" class="text">
        <button type="submit" class="bt">Login</button><span><input type="checkbox" class="checkbox">&nbsp;&nbsp;Remember me</span>
        <div style="margin-top: 20px;">
          <a href="javascript:void(0)" class="text-left lost-password">Lost your password?</a>
        </div>

      </form>

    </div>
    <div class="col-md-6 col-sm-12 col-12 content-my-account-right">
      <h2>Register</h2>
      <form>
        <p>Email address <span>*</span></p>
        <input type="text" class="text">
        <p>Password<span>*</span></p>
        <input type="text" class="text">
        <button type="submit" class="bt">Register</button>
      </form>
    </div>
    <div class="col-md-12 form-lost-password">
      <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
      <form>
        <p>Your email</p>
        <input type="text" class="text">
        <button type="submit" class="bt reset-password">RESET PASSWORD</button>
      </form>
    </div>
  </div>
</div>
<!--end content account-->
@stop()