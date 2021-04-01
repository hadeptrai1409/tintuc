@extends('layouts.main')
@section('content')
<div class="col-md-6 offset-md-3">
  <form method="post" action="{{route('baiviet.edit', ['id' => $model->id])}}" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" value="{{old('title', $model->title)}}" class="form-control">
        @if ($errors->has('title'))
            <span class="text-danger">{{$errors->first('title')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Danh_muc_id</label>

        <select class="form-control" name="danh_muc_id" id="">
            <option value="">Chọn danh mục_id</option>
            @foreach ($danhmuc as $item)
            @if ($model->danh_muc_id == $item->id)
                <option value="{{$item->id}}" selected>{{$item->name}}</option>
            @else
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endif

            @endforeach
        </select>
        @if ($errors->has('danh_muc_id'))
            <span class="text-danger">{{$errors->first('danh_muc_id')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <input type="text" name="content" value="{{old('content', $model->content)}}" class="form-control">
        {{-- <textarea class="form-control" value="{{old('content', $model->content)}}" name="content"></textarea> --}}

        @if ($errors->has('content'))
            <span class="text-danger">{{$errors->first('content')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" value="{{old('image')}}" class="form-control">
        @if ($errors->has('image'))
            <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
    </div>
    <div class="form-group">
        <img  style="width: 100px;height: 100px;" src="{{asset('upload/' . $model->image)}}" alt="" >
        <input type="hidden" name="images_cu" value="{{$model->image}}">
    </div>
    <div class="form-group">
        <label for="">Short_desc</label>
        <input type="text" name="short_desc" value="{{old('short_desc', $model->short_desc)}}" class="form-control">
        @if ($errors->has('short_desc'))
            <span class="text-danger">{{$errors->first('short_desc')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input type="text" name="author" value="{{old('author', $model->author)}}" class="form-control">
        @if ($errors->has('author'))
            <span class="text-danger">{{$errors->first('author')}}</span>
        @endif
    </div>
    <input type="hidden" name="id" value="{{$model->id}}">
    <div class="text-center">
        <button class="btn btn-sm btn-success" type="submit">Tạo mới</button>
        <a class="btn btn-primary" href="{{route('baiviet.index')}}">Huỷ</a>
    </div>
  </form>
</div>
@endsection
