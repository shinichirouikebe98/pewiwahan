<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan Nikah</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

    <div class="navbar">
        <div class="navbar-container">
        <a class="navbar-brand" href="#">Undangan Nikah</a>
        <div class="navbar-links">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @else
                <div class="dropdown">
                    <a href="#">{{ Auth::user()->name }} ▼</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</div>
    <main>
        @yield('content')
    </main>

</body>
</html>
