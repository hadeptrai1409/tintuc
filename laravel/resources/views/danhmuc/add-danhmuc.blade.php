@extends('layouts.main')
@section('content')
<div class="col-md-6 offset-md-3">
  <form method="post" action="{{route('danhmuc.add-danhmuc')}}" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Logo</label>
        <input type="file" name="logo" value="{{old('logo')}}" class="form-control">
        @if ($errors->has('logo'))
            <span class="text-danger">{{$errors->first('logo')}}</span>
        @endif
    </div>
    <div class="text-center">
        <button class="btn btn-sm btn-success" type="submit">Tạo mới</button>
        <a class="btn btn-primary" href="{{route('danhmuc.index')}}">Huỷ</a>
    </div>
  </form>
</div>
@endsection
