<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!!  Vite::asset('/js/main.jsx', ['react']) !!}
    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
<div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{route('home')}}">
                    Home
                </a>
                <a class="navbar-item" href="{{route('posts.index')}}">
                    Blog
                </a>

                <a class="navbar-item">
                    Documentation
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    @guest
                        <div class="buttons">
                            @if(Route::has('login'))
                                <a class="button is-primary" href="{{ route('login') }}">
                                    login
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <a class="button is-light" href="{{ route('register') }}">
                                    Register
                                </a>
                            @endif
                            @else
                                @if(Auth::user()->roles === 'admin')
                                    <a class="navbar-item" href="{{route('admin.index')}}">
                                        Administration
                                    </a>
                                @endif
                                <a id="navbarDropdown" class="button is-primary" href="{{ route('profiller') }}"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
    </nav>
    <div class="container is-max-desktop mt-5">
        @yield('content')
    </div>
</div>
</body>
</html>
