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
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navBar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="" alt="" id="logoBrand">
                </a>
                <div class="d-flex ms-auto">{{--
                    @auth
                        @if (Auth::user()->user_type == App\Models\User::TYPE_ADMIN) --}}
                    <a class="d-flex align-items-center me-3" href="{{-- {{ route('notifications') }} --}}">
                        <div id="icons">
                            <i class="fa-regular fa-bell"></i>
                        </div>
                    </a>
                    {{--   @endauth
                    @else --}}
                    {{--     <a class="d-flex align-items-center me-3" href="{{ route('notifications') }}">
                            <div id="icons">
                                <i class="fa-regular fa-bell"></i>
                            </div>
                        </a>
                    @endif --}}
                    <a class="d-flex align-items-center">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div id="icons">
                                    <i class="fa-regular fa-circle-user"></i>
                                </div>
                            </a>

                            @if (Route::has('login'))
                                <ul class="dropdown-menu dropdown-menu-center p-3">
                                    @auth
                                        <li class="dropdown-item">
                                            Olá <span style="color: #ff7f50;">{{ Auth::user()->name }}</span>
                                        </li>
                                        <li class="dropdown-item">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button id="button" type="submit" class="btn p-0">Logout</button>
                                            </form>
                                        </li>

                                        {{-- @if (Auth::user()->user_type == App\Models\User::TYPE_ADMIN)
                                            <li class="dropdown-item">
                                                <a class="btn bg-transparent p-0"
                                                    href="{{ route('users.index') }}">Dashboard</a>
                                            </li>
                                        @endif --}}
                                    @endauth
                                </ul>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Outros scripts (se necessário) -->
    {{-- @stack('scripts')  <!-- Para incluir scripts adicionais --> --}}
</body>

</html>
