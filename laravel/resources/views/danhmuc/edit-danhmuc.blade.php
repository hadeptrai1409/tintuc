@extends('layouts.main')
@section('content')
<div class="col-md-6 offset-md-3">
  <form method="post"  action="{{route('danhmuc.edit', ['id' => $model->id])}}" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" name="name" value="{{old('name', $model->name)}}" class="form-control">
        @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>
     <div class="form-group">
        <label for="">Logo</label>
        <input type="file" name="logo" value="" class="form-control">
        {{-- <input type="hidden" name="logo"> --}}
        @if ($errors->has('logo'))
            <span class="text-danger">{{$errors->first('detail')}}</span>
        @endif
    </div>
    <div class="form-group">
        <img  style="width: 100px;height: 100px;" src="{{asset('upload/' . $model->logo)}}" alt="" >
        <input type="hidden" name="images_cu" value="{{$model->logo}}">
    </div>

      <input type="hidden" name="id" value="{{$model->id}}">
    <div class="text-center">
        <button class="btn btn-sm btn-success" type="submit">Gửi</button>
        <a class="btn btn-primary" href="{{url('admin/danh-muc')}}">Huỷ</a>
    </div>
  </form>
</div>
@endsection
