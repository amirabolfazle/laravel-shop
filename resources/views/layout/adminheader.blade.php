<header>
    <nav class="nav bg-dark">
        <a class="navbar-brand text-warning p-3" href="/">فروشگاه</a>
        <li class="nav-item">
            <a class="nav-link active text-muted p-4" href="/">
                <h6>خانه</h6>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-light p-4" href="/admin">
                <h6>مدیریت</h6>
            </a>
        </li>
        @yield('header')
        @if (Auth::user())
        <div class="p-3" dir="ltr"><a class="btn btn-danger text-dark" href="/logout">خروج</a><a class="btn btn-warning text-dark" href="/dashboard">{{Auth::user()->name}}</a></div>
        @else
        <div class="p-3" dir="ltr"><a class="navbar-brand btn btn-warning text-dark" href="/login">ورود به حساب کاربری</a></div>
        @endif
    </nav>
</header>