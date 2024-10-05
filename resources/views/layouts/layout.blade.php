@php use Illuminate\Support\Facades\Auth; @endphp

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href=" {{ asset('assets/images/logo.ico') }} ">
</head>
<body>

@if(Auth::check())
    @if (Auth::user()->role->code == 'manager')
        <nav>
            <ul class="nav">
                <li><a class="nav nav-link" href="">1</a></li>
                <li><a class="nav nav-link" href="">2</a></li>
                <li><a class="nav nav-link" href="">3</a></li>
                <li><a class="nav nav-link" href="{{ route('logout') }}">Выход</a></li>
            </ul>
        </nav>
    @endif
    @if (Auth::user()->role->code == 'partner')
        <nav>
            <ul class="nav">
                <li><a class="nav nav-link" href="">11</a></li>
                <li><a class="nav nav-link" href="">12</a></li>
                <li><a class="nav nav-link" href="">13</a></li>
                <li><a class="nav nav-link" href="{{ route('logout') }}">Выход</a></li>
            </ul>
        </nav>
    @endif
@endif

<main>
    @yield('content')
</main>

</body>
</html>
