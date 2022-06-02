@extends('layout.main')
@section('title', 'product single')
@section('main')

<!--title detail-->
<div class="title-page"
    style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>{{$product->name}}</h1>
                <p><span>Home</span> / Shop / Product Single {{$product->name}}</p>
            </div>
        </div>
    </div>
</div>
<!--end title detail-->
<!--product detail-->
<div class="container">
    <div class="product-single-detail">
        <div class="row product_detail">
            <div class="col-md-6 col-sm-12 col-12">
                <img src="{{url('uploads') }}/{{$product->image}}" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-12 content-product">
                <h2>{{$product->name}} | ${{$product->price}}</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic </p>
                <div class="infor-product">
                    <p><span>Sku: </span>22</p>
                    <p><span>Loại sản phẩm: </span>{{$product->name}}</p>
                    <p><span>Tag: </span>Trendy</p>
                </div>
                <form method="GET" action="{{route('home.cart-add',$product->id)}}" class="cart">
                        <input
                            onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;"
                            type='button' value='-' />
                        <input id='quantity' min='1' name='quantity' type='text' value='1' class='qualityInput' />
                        <input
                            onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;"
                            type='button' value='+' />
                        <button class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!--end product detail-->
<!--product related-->
<div class="container">
    <div class="prodcut-related">
        <div class="title">
            <h3 class="text-center">Related Products</h3>
        </div>
        <div class="row product">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-img-top">
                        <a href="product-single.html" class="wp-post-image">
                            <img class="image-cover" src="{{ url('file')}}/imager/product/product.jpg" alt="product">
                        </a>
                        <p class="onnew">New</p>
                        <div class="icon-product">
                            <button class="btn">
                                <span class="lnr lnr-lock"></span>
                            </button>
                            <button type="button" class="btn click-quick-view" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <span class="lnr lnr-magnifier"></span>
                            </button>
                            <button class="btn">
                                <span class="lnr lnr-heart"></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                Cleanser layde</a></p>
                        <span class="price">
                            <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>79
                                </span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content container">
                        <div class="product-single-quick-view">
                            <div class="row product_detail">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="flex-quick-view">
                                        <img src="{{ url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12 content-product">
                                    <h2>Whitening cream | $65</h2>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i> &nbsp; (2 customer
                                        review)</p>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                        It has survived not only five centuries, but also the leap into electronic </p>
                                    <div class="infor-product">
                                        <p><span>Sku: </span>22</p>
                                        <p><span>Category: </span>Cosmetic</p>
                                        <p><span>Tag: </span>Trendy</p>
                                        <p><span>Share: </span>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </p>
                                    </div>
                                    <div>
                                        <div class="btn-group">
                                            <button type="button" class="prev btn ">-</button>
                                            <button type="button" class="show-number btn ">1</button>
                                            <button type="button" class="next btn ">+</button>
                                        </div>
                                        <div class="btn-group">
                                            <a href="" class="btn add-to-cart">ADD TO CART<p><i
                                                        class="fas fa-cart-plus"></i></p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="lnr lnr-cross close-quick-view" data-dismiss="modal"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end product related-->

@stop()