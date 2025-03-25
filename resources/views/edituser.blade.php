@extends('layout.admin')
@section('name')
ویرایش کاربر با آیدی {{$id}}
@endsection
@section('header')
    <div class="p-3"><a href="/admin/users" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
        <br>
        <h2 class="text-light">
            ویرایش کاربر با آیدی {{$id}}
        </h2>
        <br>
        <div class="card bg-light zoomIn">
                <center class="bg-light">                    
                    <label for="file">
                        <img class="card-img-top bg-light p-5" src="{{asset($user->img)}}" style="width: 250px;" alt="تصویر">
                    </label>
                </center>
                <div class="card-body bg-light">
                    <br>
                    <br>
                    <div class="container bg-light">
                    <div class="col-4 bg-light">
                            <form action="/admin/products/{{$user->id}}" method="post" class="bg-light">
                                @CSRF
                                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                                <br>
                                <input id="file" type="file" class="form-control" name="file" placeholder="پروفایل کاربر">
                                <br>
                                <input class="form-control" type="text" name="password" value="{{$user->password}}">
                                <br>
                                <input type="submit" value="ثبت تغییرات" class="btn btn-success">
                            </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
@endsection