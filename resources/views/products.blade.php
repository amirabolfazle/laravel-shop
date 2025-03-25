@extends('layout.user')
@section('name')
لیست محصولات دسته بندی {{$cat_id}}
@endsection
@section('header')
    <div class="p-3"><a href="/" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
<br>
<h2 class="text-light">
    لیست محصولات دسته بندی {{$cat_id}}
</h2>
<br>
    <br>
        <div class="container-fluid bg-dark">
            <div class="row bg-dark">
                @foreach($catfilter as $cats)
                <div class="col-3 bg-dark zoomIn">
                    <div class="card bg-light">
                        <img class="card-img-top bg-light p-5" src="{{asset('box.png')}}" alt="">
                        <div class="card-body bg-light">
                            <h5 class="card-title bg-light">{{$cats->name}}</h5>
                            <p class="card-text bg-light">لورم ایسپوم</p>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="/product/1" class="card-link bg-light btn text-success">مشاهده اطلاعات محصول</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
        </div>
@endsection