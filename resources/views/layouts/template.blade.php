<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('src/favicon/icon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">
                    <img width="30px" src="{{ asset('src/icons/icon.svg') }}" alt="logo">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar.navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li  class="nav-item">
                            <a class="nav-link" href="{{ route('Product.index') }}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Section.index') }}">Secciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('State.index') }}">Estados</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('header')
        </header>

        <main>

            @yield('main')
        </main>

        <footer>
            @yield('footer')
        </footer>
    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>