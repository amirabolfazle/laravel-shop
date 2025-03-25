@extends('layout.admin')
@section('name')
لیست کاربران
@endsection
@section('header')
    <div class="p-3"><a href="/admin" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
    <br>
    <a href="/admin/users/insert" class="btn btn-md btn-warning rubberBand">افزودن</a>
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
                                نام کاربری
                            </th>
                            <th>
                                ویرایش
                            </th>
                            <th>
                                حذف
                            </th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{asset($user->img)}}" class="btn bg-light"><img class="bg-light" src="{{asset($user->img)}}" alt="تصویر" width="50"></a>
                            </td>
                            <td>
                            {{$user->name}}
                            </td>
                            <td>
                                <a href="users/{{$user->id}}" class="btn btn-primary">ویرایش</a>
                            </td>
                            <td>
                                <a href="users/delete/{{$user->id}}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection