@extends('layout.admin')
@section('name')
لیست محصولات
@endsection
@section('header')
    <div class="p-3"><a href="/admin" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
    <br>
    <a href="/admin/products/insert" class="btn btn-md btn-warning rubberBand">افزودن</a>
    <br>
    <br>
        <div class="container">
            <div class="col-6 zoomIn">
                <table class="table table-light table-bordered text-center">
                    <tbody>
                        <tr>
                            <th>
                                تصویر
                            </th>
                            <th>
                                نام محصول
                            </th>
                            <th>
                                دسته بندی
                            </th>
                            <th>
                                ویرایش
                            </th>
                            <th>
                                حذف
                            </th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <a href="{{asset($product->img)}}" class="btn bg-light"><img class="bg-light" src="{{asset($product->img)}}" alt="تصویر" width="50"></a>
                            </td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                {{$product->cat_name}}
                            </td>
                            <td>
                                <a href="products/{{$product->id}}" class="btn btn-primary">ویرایش</a>
                            </td>
                            <td>
                                <a href="products/delete/{{$product->id}}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection