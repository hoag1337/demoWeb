@extends('admin.layout');
@section('title','Danh mục sản phẩm')

@section('content')
<div class="alert alert-primary" role="alert">
    <strong>{{Session::get('done')}}</strong>
</div>
<div class = "container-fliud">
    <div class  = "row">
        <div class = "col-md-4">
        <form action ="" class = "form-inline">
            <div class ="form-group">
                <input id="key" name="key" class = "form-control" type = "text">
                <div>
                    <button type="submit" class = "btn btn-primary"><i class  = 'fas fa-search'></i></button>
                </div>
            </div>
        </form>
        </div>
        <div class = "col-md-8 text-right">
            <a href  = "{{route('category.create')}}" type = "button" class = "btn btn-primary">add product</a>
        </div>
        
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>number of product</th>
            <th>status</th>
            <th>priority</th>
            <th class = 'text-right'>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td scope="row">{{$d->id}} </td>
            <td>{{$d->name}}</td>
            <td></td>
            <td>
                @if ($d->status == 1) 
                <span class = 'badge badge-success'>còn hàng
                    <i class = 'fas fa-arrow-alt-circle-up'></i>
                </span>
                @else 
                <span class = 'badge badge-danger'>hết hàng dồi
                <i class = 'fas fa-arrow-alt-circle-down'></i>
                </span>
                
                @endif
            </td>
            <td>{{$d->priority}}</td>
            <td class = 'text-right'>
                <a href = "" class = 'btn btn-success'><i class = 'fas fa-edit'></i></a>
                <a href = "" class = 'btn btn-danger'><i class = 'fas fa-trash'></i></a>
</td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$data->links()}}
@endsection
