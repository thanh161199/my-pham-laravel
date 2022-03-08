@extends('layout.admin')
@section('title', 'Danh sách danh mục')
@section('main')
<table class="table table-bordered">
  <thead>
    <tr>
      <th>STT</th>
      <th>Tên danh mục</th>
      <th>Trạng thái</th>
      <th>Ngày tạo</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $item)
    <tr>
      <th>{{ $key + 1 }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->status }}</td>
      <td>{{ $item->created_at }}</td>
      <td>
        <form action="{{ route('category.destroy', $item->id) }}" method="post">
          @csrf @method('DELETE')
          <a href="" class="btn btn-primary">Sửa</a>
          <a href="" class="btn btn-danger">Xóa</a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr>
{{ $data->links() }}
@stop()