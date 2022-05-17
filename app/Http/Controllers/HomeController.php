<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(Product $product){
      $category = Category::paginate(3);
      $product_sale = Product::sale(2);
      $product_new = Product::new(9)->chunk(3);

      // dd($product_new);
      return view('site.home',compact('category','product_sale', 'product_new','product'));
    }
    public function category(Category $category){
      $products = $category->products()->paginate(3);
      // dd($products);
      return view('site.category',compact('category','products'));

    }
    public function productSingle(Product $product){
        return view('site.product-single', compact('product'));
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
?>