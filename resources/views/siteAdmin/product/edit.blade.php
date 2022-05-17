@extends('layout.admin')
@section('title', 'Sửa sản phẩm')
@section('main')

<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
  @csrf @method('PUT')
  <div class="form-group">
    <label for="" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
    @error('name') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Danh mục sản phẩm</label>
   <select name="category_id" id="input" class="form-control" required="required">
     <option value="">Chọn danh mục</option>
     @foreach($cats as $cat)
     <option value="{{$cat->id}}" {{$cat->id == $product->category_id ? 'selected' : ''}}>{{$cat->name}}</option>
     @endforeach
   </select>
    @error('name') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Gía sản phẩm</label>
    <input type="text" class="form-control" name="price" value="{{$product->price}}">
    @error('price') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Gía khuyến mãi</label>
    <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}">
    @error('sale_price') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Ảnh sản phẩm</label>
    <img src="{{url('uploads')}}/{{$product->image}}" width="60px" alt="">
    <input type="file" class="form-control" name="upload">
    @error('upload') {{$message}} @enderror
  </div>


  <div class="form-group">
    <p for="" class="form-label">Trạng thái</p>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}>
      <label class="form-check-label" for="">
        Tạm ẩn
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status"  value="1" {{$product->status == 1 ? 'checked' : ''}}>
      <label class="form-check-label" for="">
        Hiện thị
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@stop()