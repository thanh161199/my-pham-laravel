@extends('layout.main')
@section('title', 'product single')
@section('main')

<!--title detail-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span> / Shop / Product Single</p>
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
        <div id="slider" class="flexslider">
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
        <div id="carousel" class="flexslider">
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
      <div class="col-md-6 col-sm-12 col-12 content-product">
        <h2>Whitening cream | $65</h2>
        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer review)</p>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book.
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
            <a href="#" class="btn add-to-cart">ADD TO CART<p><i class="fas fa-cart-plus"></i></p> </a>
          </div>
        </div>
        <div class="information">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Additional information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (2)</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              On the other hand, we denounce with righteous indignation and dislike men
              who are so beguiled and demoralized by the charms of pleasure of the moment,
              so blinded by desire, that they cannot foresee the pain and trouble that are
              bound to ensue; and equal blame belongs to those who fail in their
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              Berry, sweet, fresh strawberries
              <br>
              Small capacity is suitable for travel and first time experience
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="woocommerce-Reviews" id="reviews">
                <h2>2 review for Reframe Your Viewpoints</h2>
                <div id="comments">
                  <div class="comment-list">
                    <div class="comment-item">
                      <div class="comment-content">
                        <div class="row">
                          <div class="col-md-2">
                            <img src="{{ url('file')}}/imager/blog/item-coment-blog-single1.jpg" alt="customer">
                          </div>
                          <div class="col-md-8">
                            <div class="comment-body">
                              <div class="comment-author">
                                <span class="author">Emily Valdez</span>
                                <div class="star-rating">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                </div>
                              </div>
                              <span class="comment-time">March 28, 2020</span>
                              <p>But I must explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="comment-item">
                      <div class="comment-content">
                        <div class="row">
                          <div class="col-md-2">
                            <img src="{{ url('file')}}/imager/blog/item-coment-blog-single2.jpg" alt="customer">
                          </div>
                          <div class="col-md-8">
                            <div class="comment-body">
                              <div class="comment-author">
                                <span class="author">Emma Hayes</span>
                                <div class="star-rating">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                </div>
                              </div>
                              <span class="comment-time">March 28, 2020</span>
                              <p>Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="review_form_wrapper">
                  <div id="review_form">
                    <div id="respond" class="comment-respond">
                      <form id="commentform" class="comment-form common-form js-contact-form" action="#" method="POST">
                        <p class="comment-notes">
                          <span>Add a review</span>
                          <span id="email-notes">
                            Your email address will not be published. Required fields are marked
                            <span class="required">*</span>
                          </span>
                        </p>
                        <div class="comment-form-rating">
                          <label>Your rating</label>
                          <p class="stars">
                            <a href="#" class="star-1"><i class="far fa-star"></i></a>
                            <a href="#" class="star-2"><i class="far fa-star"></i></a>
                            <a href="#" class="star-3"><i class="far fa-star"></i></a>
                            <a href="#" class="star-4"><i class="far fa-star"></i></a>
                            <a href="#" class="star-5"><i class="far fa-star"></i></a>
                          </p>
                        </div>
                        <p class="comment-form-author">
                          <input id="author" name="author" type="text" required="" placeholder="Your Name">
                        </p>
                        <p class="comment-form-email">
                          <input type="email" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" id="email" placeholder="Your Email">
                        </p>
                        <p class="comment-form-comment">
                          <textarea id="comment" name="comment" required="" placeholder="Write Your Review..."></textarea>
                        </p>
                        <p class="form-submit">
                          <input name="submit" type="submit" id="submit" class="submit au-btn btn-small" value="Submit">
                          <span><i class="zmdi zmdi-arrow-right"></i></span>
                        </p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
      <div class="col-md-3 col-sm-6 col-12">
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
      <div class="col-md-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product3.jpg" alt="product">
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
      <div class="col-md-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-img-top">
            <a href="product-single.html" class="wp-post-image">
              <img class="image-cover" src="{{ url('file')}}/imager/product/product4.jpg" alt="product">
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
                      <a href="#" class="btn add-to-cart">ADD TO CART<p><i class="fas fa-cart-plus"></i></p> </a>
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