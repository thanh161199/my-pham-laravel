@extends('layout.main')
@section('title', 'Mỹ phẩm Uray')
@section('main')
<!--code content-homepage-->
<div class="content-homepage">
    <!-- slide-homepage-1-->
    <div class="slider-homepage1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slide-homepage1.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-6 col-sm-8 col-8 content-slide">
                                    <h2>Xịt <br />dưỡng ẩm</h2>
                                    <p>CÓ LỢI CHO MÙA ĐÔNG</p>
                                    <a href="product-list.html">MUA SẮM NGAY BÂY GIỜ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slider-homepage2.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-9 col-sm-10 col-10 content-slide">
                                    <h2> Kem <br />làm sáng da</h2>
                                    <p>CÓ LỢI CHO MÙA ĐÔNG</p>
                                    <a href="product-list.html">MUA SẮM NGAY BÂY GIỜ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slider-homepage1.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-6 col-sm-9 col-9 content-slide">
                                    <h2>Chống <br />lão hóa da</h2>
                                    <p>CÓ LỢI CHO MÙA ĐÔNG</p>
                                    <a href="product-list.html">MUA SẮM NGAY BÂY GIỜ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-slider-homepage1">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"> <span class="lnr lnr-chevron-left"></span> </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon"> <span class="lnr lnr-chevron-right"></span> </span>
            </a>
        </div>
    </div>
    <!--end slide-homepage-1-->
    <!--end cosmetic-->
    <!--Product out-->
    <div class="container">
        <div class="product-out">
            <div class="title">
                <h2 class="text-center">Sản phẩm hot nhất</h2>
            </div>
            <div id="demo-slide1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    @foreach($product_new as $key1 => $prods)
                    <li data-target="#demo-slide1" data-slide-to="{{$key1}}" class=" {{$key1 == 0 ? 'active' :'' }}">
                    </li>
                    @endforeach
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach($product_new as $key => $prods)
                    <div class="carousel-item {{$key == 0 ? 'active' :'' }}">
                        <div class="row product">
                            @foreach($prods as $pn)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="#" class="wp-post-image">
                                            <img class="image-cover" src="{{ url('uploads') }}/{{$pn->image}}" alt="product">
                                        </a>
                                        @if($pn->sale_price == 0)
                                        <p class="onnew">New</p>
                                        @else
                                        <p class="onsale">Sale</p>
                                        @endif
                                        <div class="icon-product">
                                            <button class="btn">
                                                <a href="{{route('home.cart-add', $pn->id)}}"><span class="lnr lnr-lock"></span></a>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter-{{$pn->id}}">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn"><span class="lnr lnr-heart"></span></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">{{$pn->cat->name}}</p>
                                        <p class="woocommerce-loop-product__title"><a href="{{route('home.product-single',['product'=> $pn->id, 'slug'=> Str::slug($pn->name)])}}">{{$pn->name}}</a>
                                        </p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{$pn->price}}
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter-{{$pn->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content container">
                                        <div class="product-single-quick-view">
                                            <div class="row product_detail">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="flex-quick-view">
                                                        <a href="#" class="wp-post-image">
                                                            <img class="image-cover" style="width:500px;" src="{{ url('uploads') }}/{{$pn->image}}" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12 content-product">
                                                    <h2>{{$pn->name}} | ${{$pn->price}}</h2>
                                                    <p>Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s,
                                                        when an
                                                        unknown printer took a galley of type and scrambled it
                                                        to make a type
                                                        specimen
                                                        book.
                                                        It has survived not only five centuries, but also the
                                                        leap into electronic
                                                    </p>
                                                    <div class="infor-product">
                                                        <p><span>Sku: </span>22</p>
                                                        <p><span>Loại: </span>{{$pn->name}}</p>
                                                        <p><span>Tag: </span>Trendy</p>
                                                    </div>
                                                    <form method="GET" action="{{route('home.cart-add',$pn->id)}}" class="cart">
                                                        <input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                                                        <input id='quantity' min='1' name='quantity' type='text' value='1' />
                                                        <input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                                                        <button class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <span class="lnr lnr-cross close-quick-view" data-dismiss="modal"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->
    <!-- code review home-->
    <div class="container-fluid">
        <div class="row review-homepage" style=" background-image: url('file/imager/home/bg-review.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        ">
            <div class="container">
                <div class="row ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia1.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia2.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia3.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end code review home-->
    <!--deal of the day-->
    <div class="container-fluid">
        <div class="row deal-day">
            <div class="content-deal-day">
                <div class="title">
                    <h2>deal of the day</h2>
                </div>
                <ul class="list-inline" id="dealday">
                    <li>
                        <h2 id="dealdays">05</h2>

                        <p>Days</p>
                    </li>
                    <li>
                        <h2 id="dealhours">12</h2>

                        <p>Hours</p>
                    </li>
                    <li>
                        <h2 id="dealminutes">47</h2>

                        <p>Mins</p>
                    </li>
                    <li>
                        <h2 id="dealseconds">41</h2>

                        <p>Secs</p>
                    </li>
                </ul>
                <button class="btn btn-lg">SHOP NOW</button>
            </div>
        </div>
    </div>
    <!--end deal of the day-->
    <!--code product latest new-->
    <div class="container lastest">
        <div class="title">
            <h2 class="text-center" style="padding: 20px 0;">Latest News</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"><img src="{{url('file')}}/imager/product-lastest/lastest1.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html"> But I must explain to you how all
                                        this</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest2.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Neque porr quisquam dolorem</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest3.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Ut enim ad minima veniam quis
                                        nostrum</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest4.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Itaque earum rerum hic tenetur</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest5.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">In a free hour,when our power</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest6.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">On the other hand,we denounce</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end code product lastest new-->
</div>
<!--end code homepage-->

@stop()