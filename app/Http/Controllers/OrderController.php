<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; 

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id','DESC')->paginate(5);
        return view('siteAdmin.order.index', compact('orders'));
    }

    public function detail(Order $order)
    {
        return view('siteAdmin.order.detail', compact('order'));
    }

    public function status(Order $order, Request $req)
    {
        $order->update(['status'=>$req->status]);
        return redirect()->back()->with('yes','Cập nhật trạng thái đơn hàng thành công');
    }
}
