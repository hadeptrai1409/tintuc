@extends('layouts.main')
@section('content')
<div class="col-md-6 offset-md-3">
  <form method="post" action="{{route('user.edit', ['id' => $model->id])}}" >
      @csrf
    <div class="form-group">
        <label for="">Role</label>
        <select class="form-control" name="role" id="">
            <option value="0">Người dùng</option>
            <option value="1">Admin</option>
        </select>
        @if ($errors->has('role'))
            <span class="text-danger">{{$errors->first('role')}}</span>
        @endif
    </div>

    <div class="text-center">
        <button class="btn btn-sm btn-success" type="submit">Gửi</button>
        <a class="btn btn-primary" href="{{route('user.index')}}">Huỷ</a>
    </div>
  </form>
</div>
@endsection
