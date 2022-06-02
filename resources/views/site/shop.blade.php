@extends('layout.main')
@section('title', 'Shop page')
@section('main')
<!--title page-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span> / Shop / 4 Colums</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->
<!--content shop 4 colums-->
<div class="container list-product">
  <div class="content-shop-4colum">
    <div class="row product">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
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
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product2.jpg" alt="product">
            </a>
            <p class="onsale">Sale</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Spa</a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Night cream</a></p>
            <span class="price">
              <del>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>45

                </span>
              </del>
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>38
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/shop/Shop_3Columns-1.jpg" alt="product">
            </a>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Make up</a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Cleanser layde</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>56
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product4.jpg" alt="product">
            </a>
            <p class="onsale">Sale</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
                Moisturizing cream</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>87
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product5.jpg" alt="product">
            </a>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Make up </a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Perfect Spice</a></p>
            <span class="price">
              <del>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>51

                </span>
              </del>
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>41
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product6.jpg" alt="product">
            </a>
            <p class="onnew">New</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
                Silky smooth skin</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>93
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product7.jpg" alt="product">
            </a>
            <p class="onnew">New</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Spa</a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Whitening cream</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>45
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/shop/Shop_4Column.jpg" alt="product">
            </a>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
                Water flower</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>62
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/shop/Shop_4Column.jpg" alt="product">
            </a>
            <p class="onsale">Sale</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
                Water flower</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>62
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
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
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
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
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product2.jpg" alt="product">
            </a>
            <p class="onsale">Sale</p>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Spa</a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Night cream</a></p>

            <span class="price">
              <del>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>45

                </span>
              </del>
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>38
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/shop/Shop_3Columns-1.jpg" alt="product">
            </a>
            <div class="icon-product">
              <button class="btn">
                <span class="lnr lnr-lock"></span>
              </button>
              <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="lnr lnr-magnifier"></span>
              </button>
              <button class="btn">
                <span class="lnr lnr-heart"></span>
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-title"><a href="product-list.html">Make up</a></p>
            <p class="woocommerce-loop-product__title"><a href="product-single.html">
                Cleanser layde</a></p>
            <span class="price">
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>56
                </span>
              </ins>
            </span>
          </div>
        </div>
      </div>
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#"> > </a></li>
      </ul>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content container">
          <div class="product-single-quick-view">
            <div class="row product_detail">
              <div class="col-md-6 col-sm-12 col-12">
                <div class="flex-quick-view">
                  <div id="flex-slider" class="flexslider">
                    <ul class="slides">
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                      </li>
                      <!-- items mirrored twice, total of 12 -->
                    </ul>
                  </div>
                  <div id="flex-carousel" class="flexslider">
                    <ul class="slides">
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail1.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail2.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail3.jpg" alt="">
                      </li>
                      <li>
                        <img src="{{ url('file')}}/imager/product-detail/product_detail4.jpg" alt="">
                      </li>
                      <!-- items mirrored twice, total of 12 -->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12 content-product">
                <h2>Whitening cream | $65</h2>
                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer
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
                    <a href="" class="btn add-to-cart">ADD TO CART<p><i class="fas fa-cart-plus"></i></p> </a>
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
<!--end content shop 4 colums-->
@stop()