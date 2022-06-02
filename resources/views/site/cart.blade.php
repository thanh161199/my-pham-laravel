@extends('layout.main')
@section('title', 'cart')
@section('main')

<!--title page-->
<div class="title-page"
    style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span>/ Shop / Cart</p>
            </div>
        </div>
    </div>
</div>
<!--end title page-->

<!--content cart-->
@if($carts)
<div class="container">
    <div class="row content-cart">
        <table class="table cart-desktop">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Gía</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thành tiền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $product)
                <tr>
                    <td>1</td>
                    <td>{{$product->name}}</td>
                    <td>
                        <form action="{{route('home.cart-update', $product->id)}}">
                            <input type="number" style="width: 60px; text-align: center" value="{{$product->quantity}}"
                                name="quantity">
                            <button class="btn-btn-sm btn-primary">Cập nhật</button>
                        </form>
                    </td>
                    <td>${{$product->price}}</td>
                    <td>
                        <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="60">
                    </td>
                    <td>{{$product->quantity * $product->price}}</td>
                    <td>
                        <a href="{{route('home.cart-remove',$product->id)}}"
                            onclick="return confirm('Bạn có muốn xoá không')" class="btn btn-sm btn-danger">Xoá</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="cart-mobile">
            <table class="table">
                <tr>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>Skin recreation</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$56</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">1</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$56</td>
                </tr>
            </table>
            <span>X</span>
        </div>
        <div class="cart-mobile">
            <table class="table">
                <tr>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>Face cream</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$48</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">3</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$144</td>
                </tr>
            </table>
            <span>X</span>
        </div>

        <div class="card-button">
            <button type="button" class="btn coupon float-left">Coupon code</button>
            <button type="button" class="btn apply float-left">APPLY COUPON</button>
            <br>
            <div class="text-center ">
                <a href="{{route('home')}}" class="btn btn-md btn-success float-right">Tiếp tục mua hàng</a>
                <a href="{{route('home.cart-clear')}}" onclick="return confirm('Bạn có muốn xóa không?')"
                    class="btn btn-md btn-danger float-right">Xóa hết</a>
            </div>
        </div>
        <div class="rocart-total">
            <h2>Cart totals</h2>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <p>Subtotal</p>
                </li>
                <li class="list-inline-item"><strong>${{$totalPrice}}</strong></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <p>Total</p>
                </li>
                <li class="list-inline-item"><strong>${{$totalPrice}}</strong></li>
            </ul>
            <a href="{{route('home.order_checkout')}}" class="btn btn-sm btn-success">Xử lý đặt hàng</a>
        </div>
    </div>
</div>
@else

<div class=" container alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Mua sắm ngay</strong> Giỏ hàng đang trống
    <a href="{{route('home')}}" class="btn btn-sm btn-success"> Hãy mua hàng</a>
</div>
@endif
<!--end content cart-->
@stop()