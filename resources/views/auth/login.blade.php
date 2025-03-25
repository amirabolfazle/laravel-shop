<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/MikhakFD" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>
        ورود
    </title>
</head>
<header>
    <nav class="nav bg-dark">
        <a class="navbar-brand text-warning p-3" href="/">فروشگاه</a>
        <li class="nav-item">
            <a class="nav-link active text-muted p-4" href="/">
                <h6>خانه</h6>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-muted p-4" href="/admin">
                <h6>مدیریت</h6>
            </a>
        </li>
        @if (Auth::user())
        <div class="p-3" dir="ltr"><a class="navbar-brand btn btn-warning text-dark" href="/edit/{{Auth::user()->id}}">{{Auth::user()->name}}</a></div>
        @else
        <div class="p-3" dir="ltr"><a class="navbar-brand btn btn-warning text-dark" href="/login">ورود به حساب کاربری</a></div>
        @endif
    </nav>
</header>
<body>
    <center>
        <div class="card col-4 bg-dark">
            <div class="card-body">
                <form method="post" action="/login">
                    @CSRF
                    <input class="form-control" type="text" name="mobile" placeholder="شماره تلفن خود را وارد کنید...">
                    <br>
                    <input class="form-control" type="text" name="password" placeholder="گذرواژه خود را وارد کنید...">
                    <br>
                    <input class="btn btn-warning" type="submit" value="ورود">
                    <br>
                    <br>
                    <a href="/register" class="text-light btn">حساب کاربری ندارید؟</a>
                </form>
            </div>
        </div>
    </center>
</body>
<footer class="bg-dark">
<div class="wrapper">
	<svg>
		<text x="50%" y="50%" dy=".35em" text-anchor="middle">
			By Amirabolfazl
		</text>
	</svg>
</div>
</footer>
</html>