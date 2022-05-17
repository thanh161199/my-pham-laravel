<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductEditRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        $data = Product::search()->paginate(20);
        return view('siteAdmin.product.index', compact('data','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //nhập dữ liệu để submitted
    public function create()
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        return view('siteAdmin.product.create', compact('cats'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //lưu dữ liệu
    public function store(ProductCreateRequest $req)
    {
        $data = $req->all('name','price','sale_price','category_id', 'status');
        //upload ảnh
        $file_name = $req->upload->getClientOriginalName();
        $pathInfo = pathinfo($file_name);
        $ext = $pathInfo['extension'];
        $base_name = $pathInfo['filename'];
        $final_name = Str::slug($base_name).'_'.time().'.'.$ext;
        $check_upload = $req->upload->move(public_path('uploads/'),$final_name);
        if ($check_upload){
            $data['image'] = $final_name;
        }
        if (Product::create($data)){
            return redirect()->route('product.index')->with('yes','Thêm mới thành công');
        }
        return redirect()->back()->with('no','Thêm mới không thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        return view('siteAdmin.product.edit', compact('cats','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $req,Product $product)
    {
        $data = $req->all('name','price','sale_price','category_id', 'status');
        if ($req->has('upload')) {
            $file_name = $req->upload->getClientOriginalName();
            $pathInfo = pathinfo($file_name);
            $ext = $pathInfo['extension'];
            $base_name = $pathInfo['filename'];
            $final_name = Str::slug($base_name).'_'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/'),$final_name);
            if ($check_upload){
                $data['image'] = $final_name;
            }
        }
        if ($product->update($data)){
            return redirect()->route('product.index')->with('yes','Cập nhật thành công');
        }
        return redirect()->back()->with('no','Cập nhật không thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('yes','Xoá sản phẩm thành công');;
    }
}