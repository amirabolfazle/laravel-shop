@extends('layout.admin')
@section('name')
بخش مدیریت
@endsection
@section('body')
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="/admin/categories" class="btn btn-lg zoomIn">
                        <div class="card bg-light p-5">
                            <center class="bg-light"><img class="card-img-top bg-light p-5" src="{{asset('box.png')}}" style="width: 250px; height: 250px;" alt=""></center>
                            <div class="card-body bg-light">
                                <h5 class="card-title bg-light p-5">دسته بندی ها</h5>
                                <p class="card-text bg-light p-5 text-success">برای ورود به پنل کلیک کنید</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/admin/users" class="btn btn-lg zoomIn">
                        <div class="card bg-light p-5">
                            <center class="bg-light"><img class="card-img-top bg-light p-5" src="{{asset('user.png')}}" style="width: 250px; height: 250px;" alt=""></center>
                            <div class="card-body bg-light">
                                <h5 class="card-title bg-light p-5">کاربران</h5>
                                <p class="card-text bg-light p-5 text-success">برای ورود به پنل کلیک کنید</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/admin/products" class="btn btn-lg zoomIn">
                        <div class="card bg-light p-5">
                            <center class="bg-light"><img class="card-img-top bg-light p-5" src="{{asset('box.png')}}" style="width: 250px; height: 250px;" alt=""></center>
                            <div class="card-body bg-light">
                                <h5 class="card-title bg-light p-5">محصولات</h5>
                                <p class="card-text bg-light p-5 text-success">برای ورود به پنل کلیک کنید</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection