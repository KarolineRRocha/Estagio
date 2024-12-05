<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>

<body>
    <aside class="main-menu">
        <ul>
            {{--  @auth
                @if (Auth::user()->user_type == App\Models\User::TYPE_ADMIN) --}}
            @if (Route::has('login'))
                @auth
                    <li class="has-subnav {{-- {{ request()->is('users') ? 'active' : '' }} --}}">
                        <a href="{{-- {{ route('users.index') }} --}}">
                            <i class="fa fa-user"></i>
                            <span class="nav-text">
                                Olá <span style="color: #ff7f50;">{{ Auth::user()->name }}</span>
                            </span>
                        </a>
                    </li>
                @endauth
            @endif
            {{--  @endif
            @endauth --}}
            <li class="has-subnav {{-- {{ request()->is('calendar') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('calendar') }} --}}">
                    <i class="fa fa-calendar"></i>
                    <span class="nav-text">
                        Calendário Reservas
                    </span>
                </a>
            </li>
            <li class="has-subnav {{-- {{ request()->is('reservations') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('reservations.index') }} --}}">
                    <i class="fa fa-globe"></i>
                    <span class="nav-text">
                        Reservas
                    </span>
                </a>
            </li>
            <li class="has-subnav {{-- {{ request()->is('stats') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('stats') }} --}}">
                    <i class="fa fa-comments"></i>
                    <span class="nav-text">
                        Estatíticas
                    </span>
                </a>

            </li>
            <li class="has-subnav {{-- {{ request()->is('locals') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('locals.index') }} --}}">
                    <i class="fa fa-camera-retro"></i>
                    <span class="nav-text">
                        Locais
                    </span>
                </a>

            </li>
            <li class="has-subnav {{-- {{ request()->is('rooms') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('rooms.index') }} --}}">
                    <i class="fa fa-film"></i>
                    <span class="nav-text">
                        Salas
                    </span>
                </a>
            </li>
            <li class="has-subnav {{-- {{ request()->is('coruses') ? 'active' : '' }} --}}">
                <a href="{{-- {{ route('courses.index') }} --}}">
                    <i class="fa fa-book"></i>
                    <span class="nav-text">
                        Cursos
                    </span>
                </a>
            </li>

            <li class="has-subnav {{-- {{ request()->is('coruses') ? 'active' : '' }} --}}">
                <form action="{{ route('logout') }}" method="post" id="formLogout">
                    @csrf
                    <button type="submit" class="btn buttonLogout">
                        <i class="fa fa-sign-out"></i>
                        <span class="nav-textLogout">
                            Logout
                        </span>
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Outros scripts (se necessário) -->
    {{-- @stack('scripts')  <!-- Para incluir scripts adicionais --> --}}
</body>

</html>
