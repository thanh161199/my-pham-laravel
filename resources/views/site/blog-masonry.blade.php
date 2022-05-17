@extends('layout.main')
@section('title', 'Blog masonry page')
@section('main')
<!--title page-->
<div class="title-page"
    style="background-image: url('file/imager/blog/blog-title.jpg');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Blog</h1>
                <p><span>Home</span>/ Blog / Masonry</p>
            </div>
        </div>
    </div>
</div>
<!--end title page-->

<!--content blog masonry-->
<div class="container">
    <div class="content-masonry">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html"> Sed ut perspiciatis unde</a></h5>
                        <p class="card-text">But I must explain to you how all this mistaken idea of denouncing pleasure
                            and praising pain was born and I will give you.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">Et harum quidem rerum</a></h5>
                        <p class="card-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">Temporibus autem quib</a></h5>
                        <p class="card-text">On the other hand, we denounce with righteous indignation and dislike men
                            who are so beguiled and demoralized.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">There are many variations</a></h5>
                        <p class="card-text">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">All the Lorem Ipsum</a></h5>
                        <p class="card-text">It uses a dictionary of over 200 Latin words, combined with a handful of
                            model sentence structures, to generate.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">Contrary to popular</a></h5>
                        <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in
                            Virginia, looked up one of the more obscure Latin.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">The standard chunk</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">Excepteur sint occae</a></h5>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium.</p>
                    </div>
                    <div class="card-body">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ url('file')}}/imager/blog/Blog_Masonry-9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog-single.html">Nemo enim ipsam</a></h5>
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam.</p>
                    </div>
                    <div class="card-body share">
                        <span>20Th October 2019</span>
                        <a href="javascrip:void(0)" class="card-link share">Share
                        </a>
                        <div class="icon-share">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#"> > </a></li>
            </ul>
        </div>
    </div>
</div>

<!--end content blog masonry-->
@stop()