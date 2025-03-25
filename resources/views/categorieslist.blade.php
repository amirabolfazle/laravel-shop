@extends('layout.admin')
@section('name')
لیست دسته بندی ها
@endsection
@section('header')
    <div class="p-3"><a href="/admin" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
    <br>
    <a href="/admin/categories/insert" class="btn btn-md btn-warning rubberBand">افزودن</a>
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

                            <td>
                                نام دسته بندی
                            </td>
                            <td>
                                ویرایش
                            </td>
                            <td>
                                حذف
                            </td>
                        </tr>
                        @foreach($categories as $category)
                        <tr>
                            <td>
                                <a href="{{asset($category->img)}}" class="btn bg-light"><img class="bg-light" src="{{asset($category->img)}}" alt="تصویر" width="50"></a>
                            </td>
                            <td>
                                {{$category->name}}
                            </td>
                            <td>
                                <a href="categories/{{$category->id}}" class="btn btn-primary">ویرایش</a>
                            </td>
                            <td>
                                <a href="categories/delete/{{$category->id}}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection