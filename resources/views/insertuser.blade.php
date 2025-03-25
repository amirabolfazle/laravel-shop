@extends('layout.admin')
@section('name')
اضافه کردن کاربر جدید@endsection
@section('header')
    <div class="p-3"><a href="/admin/users" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <form action="/admin/users/insert" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="col-4">
                @CSRF
                <input type="text" class="form-control" name="name" placeholder="نام کاربر">
                <br>
                <input type="text" class="form-control" name="password" placeholder="رمز عبور کاربر">
                <br>
                <input type="file" class="form-control" name="file" placeholder="پروفایل کاربر">
                <br>
                <input type="submit" class="btn btn-warning" value="افزودن">
            </div>
        </div>
    </form>
@endsection