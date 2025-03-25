@extends('layout.admin')
@section('name')
اضافه کردن محصول جدید
@endsection
@section('header')
    <div class="p-3"><a href="/admin/products" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <form action="/admin/products/insert" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="col-4">
                @CSRF
                {!! $errors->first('name','<p class="text-danger">:message') !!}
                <input type="text" class="form-control" name="name" placeholder="نام محصول" required>
                <br>
                <input type="number" class="form-control" name="price" placeholder="قیمت محصول" value="0">
                <br>
                <textarea name="description" class="form-control" rows="3" placeholder="توضیحات محصول"></textarea>
                <br>
                <input type="file" class="form-control" name="file" placeholder="تصویر محصول">
                <br>
                <input type="submit" class="btn btn-warning" value="افزودن">
            </div>
        </div>
    </form>
@endsection