@extends('layouts.main')
@section('content')

{{-- <form action="" method="get">
   <div class="row">
     <div class="col">
        <div class="form-group">
            <input type="text" name="keyword" value="{{$keyword}}" class="form-control" id="">
        </div>
    </div>
   </div>
</form> --}}
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        {{-- <th>Email</th> --}}
        <th>Role</th>
        <th>Ceated_at</th>
        <th>Updated_at</th>
    </thead>
    <tbody>
        @foreach($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->password}}</td>
              {{-- <td>{{$item->email}}</td> --}}
            <td>{{$item->role}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td><a class="btn btn-primary" href="{{route('user.remove', ['id' => $item->id])}}">Xoá</a>
            <a class="btn btn-success" href="{{route('user.edit', ['id' => $item->id])}}">Sửa</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
