@extends('layout.admin')
@section('name')
ویرایش دسته بندی با آیدی {{$id}}
@endsection
@section('header')
    <div class="p-3"><a href="/admin/categories" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
        <br>
        <h2 class="text-light">
            ویرایش دسته بندی با آیدی {{$id}}
        </h2>
        <br>
        <div class="card bg-light zoomIn">
                <center class="bg-light">
                <label for="file">
                    <img class="card-img-top bg-light p-5" src="{{asset($category->img)}}" style="width: 250px;" alt="تصویر">
                </label>
                <div class="card-body bg-light">
                    <br>
                    <br>
                    <div class="container bg-light">
                    <div class="col-4 bg-light">
                            <form action="/admin/categories/{{$category->id}}" method="post" class="bg-light" enctype="multipart/form-data">
                                @CSRF
                                <input class="form-control" type="text" name="name" value="{{$category->name}}">
                                <br>
                                <input id="file" type="file" class="form-control" name="file" placeholder="تصویر دسته بندی">
                                <br>
                                <input type="submit" value="ثبت تغییرات" class="btn btn-success">
                            </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            </center>
@endsection