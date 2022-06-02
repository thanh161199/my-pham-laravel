<!doctype html>
<html lang="en">

<!-- Mirrored from html.physcode.com/uray/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 02:40:53 GMT -->

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{url('file')}}/asset/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('file')}}/asset/css/owl.theme.default.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/style68b3.css?ver=1">
    <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/style001.css">
    <link href="{{url('file')}}/asset/css/all.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Elsie" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>@yield('title')</title>
</head>

<body>
    <!--header-->
    <!--header desktop-->
    <div class="header">
        <div class="container-fluid search-header">
            <form>
                <input type="text" placeholder="Search">
                <span class="close-search">X</span>
            </form>
        </div>
        <div class="container-fluid">
            <div class="header-desktop ">
                <div class=" header-menu-desktop d-flex justify-content-between">
                    <div>
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{url('file')}}/imager/home/Logo.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}" class="menu-active" style="color: red;">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">Sản phẩm</a>
                                    <ul>
                                        @foreach($cats as $cat)
                                        <li><a href="{{route('home.category',$cat->id)}}">{{$cat->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('blogs')}}">Bài viết</a>
                                    <ul>
                                        <li><a href="{{route('blog-masonry')}}">Kết hợp</a></li>
                                        <li><a href="{{route('blog-single')}}">Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Địa chỉ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="header-right">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{route('home.cart')}}" class="cart-index">
                                        <img src="{{url('file')}}/imager/home/bag-2.png" alt=""
                                            style="width: 16px;height: 22px;margin-top: -10px;">
                                        <div class="number-cart">{{$totalQuantity}}</div>
                                    </a>
                                    <div class="widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                @foreach($carts as $cart)
                                                <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                    <a class="product-image " href="#">
                                                        <img style="height: 100px;width:100px;" src="{{url('uploads')}}/{{$cart->image}}" alt="cart-1">
                                                    </a>
                                                    <a class="product-title" href="#">{{$cart->name}}</a>

                                                    <span class="woocommerce-Price-amount amount" >
                                                        <span
                                                            class="woocommerce-Price-currencySymbol" style="margin-left: 50px;">$</span>{{$cart->price}}</span>
                                                    <span class="quantity" style="margin-left: 50px;">
                                                        Số lượng: {{$cart->quantity}}
                                                    </span>
                                                    <a href="{{ route('home.cart-remove', $cart->id)}}"
                                                        class="product-remove" class="remove">
                                                        <span class="lnr lnr-cross"></span>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <p class="woocommerce-mini-cart__total total">
                                                <span>Tổng tiền:</span>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{$totalPrice}}
                                                </span>
                                            </p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="{{route('home.cart')}}"
                                                    class="button wc-forward au-btn btn-small">Giỏ hàng</a>
                                                <a href="{{route('home.order_checkout')}}"
                                                    class="button wc-forward au-btn btn-small">Thanh toán</a>
                                            </p>
                                        </div>
                                    </div>
                                <li>
                                    <a href="javascript:void(0)" class="search-header1">
                                        <img src="{{url('file')}}/imager/home/search-header.png" alt=""
                                            style="width: 20px;height: 20px;margin-top: -10px;"></a>
                                </li>
                                <li class="login">
                                    <a href="{{route('home.login')}}"><i class="fa fa-user"
                                            style="font-size: 20px;"></i></a>
                                    <div class="widget_shopping_cart" style="margin-right: -100px;width: 150px;">
                                        <div class="widget_shopping_cart_content">
                                            <p class="woocommerce-mini-cart__buttons buttons" >
                                                <ul>
                                                    @if(auth()->guard('account')->check())
                                                    <li><a class="button_1" href="">Hồ sơ</a></li>
                                                    <li><a class="button_1" href="{{route('home.order')}}">Đơn đã đặt</a></li>
                                                    <li><a class="button_1" href="{{route('home.order_checkout')}}">Thanh toán</a></li>
                                                    <li><a class="button_1" href="{{route('home.logout')}}">Đăng xuất</a></li>
                                                    @else
                                                    <li><a class="button_1" href="{{route('home.login')}}">Đăng nhập</a></li>
                                                    <li><a class="button_1" href="{{route('home.register')}}">Đăng kí</a></li>
                                                    @endif
                                                </ul>
                                            </p>
                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end header desktop-->
    <!--header mobile-->
    <div class="header">
        <div class="container-fluid search-header">
            <form>
                <input type="text" placeholder="Search">
                <span class="close-search">X</span>
            </form>
        </div>
        <div class="container-fluid">
            <div class="header-mobile">
                <div class="header-menu-mobile d-flex justify-content-between">
                    <div>
                        <button><span class="lnr lnr-menu click-mobile"></span></button>
                    </div>
                    <div class="logo">
                        <img src="{{url('file')}}/imager/home/Logo.png" alt="">
                    </div>
                    <div>
                        <div class="row header-right">
                            <ul class="list-inline">
                                <li><a href="#" class="cart-index">
                                        <img src="{{url('file')}}/imager/home/bag-2.png" alt=""
                                            style="width: 16px;height: 22px;margin-top: -10px;">
                                        <div class="number-cart">
                                            2
                                        </div>
                                    </a>
                                    <div class="widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                @foreach($carts as $cart)
                                                <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                    <a class="product-image" href="#">
                                                        <img src="{{url('uploads')}}/{{$cart->image}}" alt="cart-1">
                                                    </a>
                                                    <a class="product-title" href="#">{{$cart->name}}</a>

                                                    <span class="woocommerce-Price-amount amount">
                                                        <span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{$cart->price}}</span>
                                                    <span class="quantity">
                                                        Qty: 1
                                                    </span>
                                                    <a href="#" class="remove">
                                                        <span class="lnr lnr-cross"></span>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <p class="woocommerce-mini-cart__total total">
                                                <span>Order Total:</span>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                    200
                                                </span>
                                            </p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="{{route('home.cart')}}"
                                                    class="button wc-forward au-btn btn-small">VIEW CART &
                                                    CHECKOUT</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)" class="search-header1"><img
                                            src="{{url('file')}}/imager/home/search-header.png" alt=""
                                            style="width: 20px;height: 20px;margin-top: -10px;"></a>
                                </li>
                                <li><a href="javascript:void(0)" class="introduce1"><img
                                            src="{{url('file')}}/imager/home/control-introduce.png" alt=""
                                            style="width: 16px;height: 16px;margin-top: -10px;"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-mobile">
                <ul>
                    <li><a href="{{route('home')}}" class="menu-active">Trang chủ</a>
                    </li>
                    <li><a href="{{route('about')}}">page</a><span class="lnr lnr-chevron-down drop-link"></span>
                        <ul class="drop-menu">
                            <li>@foreach($cats as $cat)
                            <li><a href="{{route('home.category',$cat->id)}}">{{$cat->name}}</a></li>
                            @endforeach
                    </li>
                </ul>
                </li>
                <li><a href="{{route('products')}}">shop</a><span class="lnr lnr-chevron-down drop-link"></span>
                    <ul class="drop-menu">
                        <li><a href="{{route('products')}}">Product List</a></li>
                        <li><a href="{{route('shop')}}">Layouts</a><span class="lnr lnr-chevron-down drop-link"></span>

                        </li>
                        <li><a href="">Shop Page</a><span class="lnr lnr-chevron-down drop-link"></span>
                            <ul class="drop-menu">
                                <li><a href="{{route('my-account')}}">My Account</a></li>
                                <li><a href="{{route('home.cart')}}">Cart</a></li>
                                <li><a href="{{route('wish-list')}}">Wish List</a></li>
                                <li><a href="{{route('check-out')}}">Check Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('blog-single')}}">blog</a><span class="lnr lnr-chevron-down drop-link"></span>
                    <ul class="drop-menu">
                        <li><a href="{{route('blog-masonry')}}">Masonry</a></li>
                        <li><a href="{{route('blog-single')}}">Single</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end header mobile-->
    <!--end header-->

    <!--code content-homepage-->
    @yield('main')
    <!--end code homepage-->
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{url('file')}}/imager/home/Logo.png" alt="">
                    <ul class="list-inline">
                        <li>Vì không ai từ chối niềm vui bởi vì nó là niềm vui</li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="content-footer">
                        <h2>Vị trí cửa hàng</h2>
                        <ul class="list-inline">
                            <li>Số 40 Bắc Từ Liêm - Hà Nội</li>
                            <li>(84) 123 7890</li>
                            <li> lienheadmin@gmail.com</li>
                            <li>www.uray.com</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="content-footer">
                        <h2>Hồ sơ</h2>
                        <ul class="list-inline">
                            <li><a href="{{route('home.login')}}">Tài khoản của bạn</a></li>
                            <li><a href="{{route('home.order_checkout')}}">Thủ tục thanh toán</a></li>
                            <li><a href="{{route('home.order')}}">Theo dõi đơn hàng</a></li>
                            <li><a href="#">Trợ giúp & Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <h2>Bản tin</h2>
                    <ul class="list-inline">
                        <li>Theo dõi bản tin của chúng tôi</li>
                        <li><input type="text" placeholder="Email">
                            <button> ></button>
                        </li>
                        <li>@2022 Uray. Chủ đề</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end footer-->
    <script type="text/javascript" src="{{url('file')}}/asset/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/bootstrap1.min.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/jquery.flexslider-min.js"></script>
    <script src="{{url('file')}}/asset/js/owl.carousel.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/custom.js"></script>
    <script type="text/javascript" src="{{url('file')}}/asset/js/login.js"></script>
</body>

<!-- Mirrored from html.physcode.com/uray/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 02:42:35 GMT -->

</html>