@extends('layout.user')
@section('name')
لیست دسته بندی ها
@endsection
@section('body')
<div class="container-fluid bg-dark">
            <div class="row bg-dark">
                @foreach($cats as $cat)
                <div class="col-3 bg-dark zoomIn">
                    <div class="card bg-light">
                        <img class="card-img-top bg-light p-5" src="{{asset('box.png')}}" alt="">
                        <div class="card-body bg-light">
                            <h5 class="card-title bg-light">{{$cat->name}}</h5>
                            <p class="card-text bg-light">لورم ایسپوم</p>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="/products/{{$cat->id}}" class="card-link bg-light btn text-success">مشاهده محصولات</a>
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