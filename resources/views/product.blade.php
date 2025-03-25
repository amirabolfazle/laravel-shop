@extends('layout.user')
@section('name')
اطلاعات محصول با آیدی {{$id}}
@endsection
@section('header')
    <div class="p-3"><a href="/products/1" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
<h2 class="text-light">
    اطلاعات محصول با آیدی {{$id}}
</h2>
<br>
        <br>
            <div class="card bg-light zoomIn">
                <center class="bg-light"><img class="card-img-top bg-light p-5" src="{{asset('box.png')}}" style="width: 250px;" alt=""></center>
                <div class="card-body bg-light">
                    <br>
                    <br>
                    <h5 class="card-title bg-light">{{$idfilter->name}}</h5>
                    <p class="card-text bg-light">{{$idfilter->description}}</p>
                    <br>
                    <br>
                </div>
                <div class="card-footer">
                    {{$idfilter->name}} تومان
                </div>
            </div>
@endsection