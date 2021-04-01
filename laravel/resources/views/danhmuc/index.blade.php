@extends('layouts.main')
@section('content')

<form action="" method="get">
   <div class="row">
     <div class="col">
        <div class="form-group">
            <input type="text" name="keyword" value="{{$keyword}}" class="form-control" id="">
        </div>
    </div>
   </div>
</form>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Logo</th>
        <th><a href="{{route('danhmuc.add-danhmuc')}}">Tạo mới</a></th>
    </thead>
    <tbody>
        @foreach($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>

                <img width="80px" src="{{asset('upload/' . $item->logo)}}" alt="">
            </td>
            <td><a class="btn btn-primary" href="{{route('danhmuc.remove', ['id' => $item->id])}}">Xoá</a>
            <a class="btn btn-success" href="{{route('danhmuc.edit', ['id' => $item->id])}}">Sửa</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
