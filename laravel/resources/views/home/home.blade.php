@extends('layouts.main')
@include('layouts.script')
@section('content')

<style>
.layout{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
}
</style>

<div class="layout">
<div class="row">
    <div class="col-3">
        <div class="card" style="width: 18rem;">
        <h5 class="text-center">Danh Mục</h5>
        <div class="card-body">
        <h2 class=" text-center">{{$danhmuc}}</h2>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="card" style="width: 18rem;">
        <h5 class="text-center">Bài Viết</h5>
        <div class="card-body">
        <h2 class=" text-center">{{$baiviet}}</h2>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="card" style="width: 18rem;">
        <h5 class="text-center">User</h5>
        <div class="card-body">
        <h2 class=" text-center">{{$user}}</h2>
        </div>
        </div>
    </div>
</div>
</div>
<input type="hidden" id="dulieu" value="{{$stats}}">

<div id="line-chart2" style="height: 250px;"></div>

<script>

    var dulieu = document.querySelector('#dulieu').value;
        var dl = JSON.parse(dulieu);
        console.log(dl);
        Morris.Bar({
        element: 'line-chart2',
        data: dl,
        xkey: 'title',
        ykeys: ['value'],
        labels: ['luot_view']
    });

</script>




@endsection
