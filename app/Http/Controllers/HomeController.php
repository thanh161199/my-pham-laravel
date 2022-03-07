<?php

namespace App\Http\Controllers;
// use App\Models\Category;

class HomeController extends Controller
{
    public function home(){
      // $category = Category::all();
      // dd($category);
      return view('site.home');
    }
    public function about(){
      return view('site.about');
    }
    public function blogs(){
      return view('site.blogs');
    }
    public function blogMasonry(){
      return view('site.blog-masonry');
    }
    public function blogSingle(){
      return view('site.blog-single');
    }
    public function contact(){
      return view('site.contact');
    }
    public function products(){
      return view('site.products');
    }
    public function productSingle(){
      return view('site.product-single');
    }
    public function shop(){
      return view('site.shop');
    }
    public function cart(){
      return view('site.cart');
    }
    public function offers(){
      return view('site.offers');
    }
    public function ourTeam(){
      return view('site.our-team');
    }
    public function myAccount(){
      return view('site.my-account');
    }
    public function wishList(){
      return view('site.wish-list');
    }
    public function checkOut(){
      return view('site.check-out');
    }
    // public function commingSoon(){
    //   return view('site.comming-soon');
    // }
}
