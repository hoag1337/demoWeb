@extends('admin.layout')
@section('title','thêm sản phẩm mới')
@section('content')
@if(Session::has('done'))

@endif
<form method = "POST" action = "{{route('category.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">product</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Tên mặt hàng</small>
    </div>
    <div class="form-group">
      <label for="status">status</label>
      <select class="form-control" name="status" id="status">
        <option value = 1>Còn hàng</option>
        <option value = 0>Hết hàng</option>
      </select>
      <small id="helpId" class="text-muted">Trạng thái</small>
    </div>
    <div class="form-group">
      <label for="priority">priority</label>
      <input type="text" name="priority" id="priority" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <button type="submit" class ="btn btn-primary">all done</button>
</form>
@endsection