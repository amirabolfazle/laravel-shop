@extends('layout.user')
@section('name')
داشبورد
@endsection
@section('header')
    <div class="p-3"><a href="/" class="btn btn-md btn-warning rubberBand">بازگشت</a></div>
@endsection
@section('body')
    <div class="card col-4 bg-dark">
        <div class="card-body">
            <form method="post" class="form-inline" action="/dashboard">
                @CSRF
                <input style='display: none' id="name2" class="form-control btn btn-light" type="text" name="name" value="{{Auth::user()->name}}">
                <input class="form-control btn btn-light" readonly value="نام شما: {{Auth::user()->name}}" id="name1" onclick="document.getElementById('name1').style.display = 'none';document.getElementById('name2').style.display = 'block';document.getElementById('save').style.display = 'block';">
                <label id="namelabel" for="name1" onclick="document.getElementById('namelabel').style.display = 'none';"><a class="btn btn-warning">✏️</a></label>
                <br>
                <br>
                <input style='display: none' id="mobile2" class="form-control btn btn-light" type="text" name="mobile" value="{{Auth::user()->mobile}}">
                <input class="form-control btn btn-light" readonly value="شماره تلفن شما: {{Auth::user()->mobile}} " id="mobile1" onclick="document.getElementById('mobile1').style.display = 'none';document.getElementById('mobile2').style.display = 'block';document.getElementById('save').style.display = 'block';">
                <label id="mobilelabel" for="mobile1" onclick="document.getElementById('mobilelabel').style.display = 'none';"><a class="btn btn-warning">✏️</a></label>
                <br>
                <br>
                <input style='display: none' id="password1" class="form-control btn btn-light" type="text" name="password">
                <input class="form-control btn btn-light" readonly value="برای ویرایش رمز عبور کلیک کنید " type="text" class="text-light btn" id="password2" onclick="document.getElementById('password2').style.display = 'none';document.getElementById('password1').style.display = 'block';document.getElementById('save').style.display = 'block';">
                <label id="passwordlabel" for="password2" onclick="document.getElementById('passwordlabel').style.display = 'none';"><a class="btn btn-warning">✏️</a></label>
                <br>
                <br>
                <input style='display: none' id="save" class="btn btn-warning" type="submit" value="ثبت تغییرات">
            </form>
        </div>
    </div>
@endsection