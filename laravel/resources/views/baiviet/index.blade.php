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
        <th>Title</th>
        <th>Danh_muc_id</th>

        <th>Image</th>
        <th>Short_desc</th>
        <th>Author</th>
        <th>Lượt view</th>
        <th><a href="{{route('baiviet.add-baiviet')}}">Tạo mới</a></th>
    </thead>
    <tbody>
        @foreach($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->danhmuc->name}}</td>

            <td><img width="80px" src="{{asset('upload/' . $item->image)}}" alt=""></td>
            <td>{{$item->short_desc}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->luot_view}}</td>
            <td><a class="btn btn-primary" href="{{route('baiviet.remove', ['id' => $item->id])}}">Xoá</a>
            <a class="btn btn-success" href="{{route('baiviet.edit', ['id' => $item->id])}}">Sửa</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="d-flex justify-content-end">
   {{$cates->links()}}

</div>
@endsection
