@extends('layouts.main')
@section('content')
{{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script> --}}
<div class="col-md-6 offset-md-3">
  <form method="post" action="{{route('baiviet.add-baiviet')}}" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control">
        @if ($errors->has('title'))
            <span class="text-danger">{{$errors->first('title')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Danh_muc_id</label>

        <select class="form-control" name="danh_muc_id" id="">
            <option value="">Chọn danh mục_id</option>
            @foreach ($danhmuc as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('danh_muc_id'))
            <span class="text-danger">{{$errors->first('danh_muc_id')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Content</label>

        <textarea class="form-control" value="{{old('content')}}" name="content" id="my-editor"></textarea>
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
        <label for="">Short_desc</label>
        <input type="text" name="short_desc" value="{{old('short_desc')}}" class="form-control">
        @if ($errors->has('short_desc'))
            <span class="text-danger">{{$errors->first('short_desc')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input type="text" name="author" value="{{old('author')}}" class="form-control">
        @if ($errors->has('author'))
            <span class="text-danger">{{$errors->first('author')}}</span>
        @endif
    </div>

    <div class="text-center">
        <button class="btn btn-sm btn-success" type="submit">Tạo mới</button>
        <a class="btn btn-primary" href="{{route('baiviet.index')}}">Huỷ</a>
    </div>
  </form>
</div>
{{-- <script>
                        CKEDITOR.replace( 'content' );
                </script> --}}
@endsection
