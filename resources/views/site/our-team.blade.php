@extends('layout.main')
@section('title', 'our team')
@section('main')
<!--title page-->
<div class="title-page" style="background-image: url('file/imager/our-team/ourteamtitle.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Our Team</h1>
        <p><span>Home</span>/Our Team</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->
<!--content our team-->
<div class="container">
  <div class="row content-our-team">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item-our-team">
      <img src="{{ url('file')}}/imager/our-team/ourteam-item1.jpg" alt="">
      <div class="content-item-our-team">
        <p>Cynthia McCoy</p>
        <span>Director</span>
        <nav>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item-our-team">
      <img src="{{ url('file')}}/imager/our-team/ourteam-item2.jpg" alt="">
      <div class="content-item-our-team">
        <p>Virginia Wilson</p>
        <span>Project Manager</span>
        <nav>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item-our-team">
      <img src="{{ url('file')}}/imager/our-team/ourteam-item3.jpg" alt="">
      <div class="content-item-our-team">
        <p>Evelyn Bates</p>
        <span>Designer</span>
        <nav>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 item-our-team">
      <img src="{{ url('file')}}/imager/our-team/ourteam-item4.jpg" alt="">
      <div class="content-item-our-team">
        <p>Phillip Wagner</p>
        <span>Producer</span>
        <nav>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
  </div>
  <div class="row call-us">
    <img src="{{ url('file')}}/imager/our-team/ourteam-callup.jpg" alt="">
    <div class="call-us-content">
      <p>Call us_(532) 678 9862</p>
      <span>for product advice</span>
    </div>
  </div>
</div>
<!--end content our team-->
@stop()