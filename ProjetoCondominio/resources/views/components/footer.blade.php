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
    <footer class="footer">
        <div class="container">
            <div class="copyright-area">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024 Projeto Condomínio. Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Outros scripts (se necessário) -->
    {{-- @stack('scripts')  <!-- Para incluir scripts adicionais --> --}}
</body>

</html>
