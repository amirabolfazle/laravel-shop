@extends('layout.admin')
@section('name')
اضافه کردن دسته بندی جدید
@endsection
@section('header')
    <div class="p-3"><a href="/admin/categories" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <form action="/admin/categories/insert" method="post">
        <div class="container">
            <div class="col-4">
                @CSRF
                <input type="text" class="form-control" name="name" placeholder="نام دسته بندی">
                <br>
                <input type="file" class="form-control" name="file" placeholder="تصویر دسته بندی">
                <br>
                <input type="submit" class="btn btn-warning" value="افزودن">
            </div>
        </div>
    </form>
@endsection