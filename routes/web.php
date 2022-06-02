<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderHomeController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'post_login'])->name('admin.login');

Route::group(['prefix' => 'admin','middleware' =>'auth'], function(){
  Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
  Route::resources([
    'product' => ProductController::class,
    'category' => CategoryController::class
  ]);
  Route::group(['prefix' => 'order'], function() {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/detail/{order}', [OrderController::class, 'detail'])->name('order.detail');
    Route::post('/status/{order}', [OrderController::class, 'status'])->name('order.status');
});
});

Route::group(['prefix' => 'account'], function() {
  Route::get('/login', [AccountController::class, 'login'])->name('home.login');
  Route::post('/login', [AccountController::class, 'post_login'])->name('home.login');
  Route::get('/profile', [AccountController::class, 'profile'])->name('home.profile');
  Route::get('/logout', [AccountController::class, 'logout'])->name('home.logout');
  Route::get('/register', [AccountController::class, 'register'])->name('home.register');
  Route::post('/register', [AccountController::class, 'post_register'])->name('home.register');
});

Route::group(['prefix' => 'cart'], function() {
  Route::get('/', [CartController::class, 'view'])->name('home.cart');
  Route::get('/clear', [CartController::class, 'clear'])->name('home.cart-clear');
  Route::get('/add/{product}', [CartController::class, 'add'])->name('home.cart-add');
  Route::get('/remove/{product}', [CartController::class, 'remove'])->name('home.cart-remove');
  Route::get('/update/{product}', [CartController::class, 'update'])->name('home.cart-update');
});

Route::group(['prefix' => 'order', 'middleware' => 'acc'], function() {
  Route::get('/', [OrderHomeController::class, 'order'])->name('home.order');
  Route::get('/checkout', [OrderHomeController::class, 'checkout'])->name('home.order_checkout');
  Route::post('/checkout', [OrderHomeController::class, 'post_checkout'])->name('home.order_checkout');
  Route::get('/detail/{order}', [OrderHomeController::class, 'detail'])->name('home.order_detail');
});

Route::group(['prefix'=>''], function(){
  Route::get('/', [HomeController::class, 'home'])->name('home');
  Route::get('about', [HomeController::class, 'about'])->name('about');
  Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
  Route::get('blog-masonry', [HomeController::class, 'blogMasonry'])->name('blog-masonry');
  Route::get('blog-single', [HomeController::class, 'blogSingle'])->name('blog-single');
  Route::get('contact', [HomeController::class, 'contact'])->name('contact');
  Route::get('products', [HomeController::class, 'products'])->name('products');
  Route::get('//{product}{slug}', [HomeController::class, 'productSingle'])->name('home.product-single');
  Route::get('shop', [HomeController::class, 'shop'])->name('shop');
  Route::get('offers', [HomeController::class, 'offers'])->name('offers');
  Route::get('our-team', [HomeController::class, 'ourTeam'])->name('our-team');
  Route::get('my-account', [HomeController::class, 'myAccount'])->name('my-account');
  Route::get('wish-list', [HomeController::class, 'wishList'])->name('wish-list');
  Route::get('check-out', [HomeController::class, 'checkOut'])->name('check-out');
  Route::get('danh-muc/{category}', [HomeController::class, 'category'])->name('home.category');

});


