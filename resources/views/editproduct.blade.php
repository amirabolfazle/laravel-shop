@extends('layout.admin')
@section('name')
ویرایش محصول با آیدی {{$id}}
@endsection
@section('header')
    <div class="p-3"><a href="/admin/products" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <br>
        <br>
        <h2 class="text-light">
            ویرایش محصول با آیدی {{$id}}
        </h2>
        <br>
        <div class="card bg-light zoomIn">
                <center class="bg-light">
                    <label for="file">
                        <img class="card-img-top bg-light p-5" src="{{asset($idfilter->img)}}" style="width: 250px;" alt="تصویر">
                    </label>
                </center>
                <div class="card-body bg-light">
                    <br>
                    <br>
                    <div class="container bg-light">
                    <div class="col-4 bg-light">
                            <form action="/admin/products/{{$idfilter->id}}" method="post" class="bg-light">
                                @CSRF
                                <input class="form-control" type="text" name="name" value="{{$idfilter->name}}">
                                <br>
                                <input class="form-control" type="number" name="price" value="{{$idfilter->price}}">
                                <br>
                                <textarea class="form-control" name="description" rows="3">{{$idfilter->description}}</textarea>
                                <br>
                                <select class="form-select" name="cat">
                                    <option value="" class="bg-light">بدون دسته بندی</option>
                                    @foreach($cats as $cat)
                                        <option class="bg-light" 
                                        @if ($idfilter->category_id==$cat->id)
                                            selected
                                        @endif
                                         value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <input id="file" type="file" class="form-control" name="file" placeholder="تصویر محصول">
                                <br>
                                <input type="submit" value="ثبت تغییرات" class="btn btn-success">
                            </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
@endsection
    